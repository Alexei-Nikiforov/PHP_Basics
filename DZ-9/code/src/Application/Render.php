<?php

namespace Geekbrains\Application1\Application;

use Exception;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use Twig\Token;

class Render
{

    private string $viewFolder = '/src/Domain/Views/';
    private FilesystemLoader $loader;
    private Environment $environment;


    public function __construct()
    {
        $this->loader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . $this->viewFolder);
        $this->environment = new Environment($this->loader, [
            //'cache' => $_SERVER['DOCUMENT_ROOT'].'/cache/',
        ]);
    }

    public function renderPage(string $contentTemplateName = 'page-index.tpl', array $templateVariables = [])
    {
        $template = $this->environment->load('main.tpl');
        $templateVariables['content_template_name'] = $contentTemplateName;
        $templateVariables['counter'] = $_SESSION['counter'];
        $templateVariables['random_int'] = rand(1, 10000);

        if (isset($_SESSION['user_name'])) {

            $templateVariables['names'] = $_SESSION['user_name'];
            $templateVariables['user_authorized'] = true;
        }

        return $template->render($templateVariables);
    }

    public function renderPageWithForm(string $contentTemplateName = 'page-index.tpl', array $templateVariables = [])
    {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));

        $templateVariables['csrf_token'] = $_SESSION['csrf_token'];

        return $this->renderPage($contentTemplateName, $templateVariables);
    }

    public static function renderExceptionPage(Exception $exception): string
    {
        Render::$loader = new FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . Render::$viewFolder);
        Render::$environment = new Environment(Render::$loader, [
            //'cache' => $_SERVER['DOCUMENT_ROOT'] . "/../" . '/cache/';
        ]);

        $templateVariables['content_template_name'] = "error.tpl";
        $templateVariables['error_message'] = $exception->getMessage();

        return Render::$environment->render("error.tpl", $templateVariables);
    }
}
