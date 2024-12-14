<?php

namespace Geekbrains\Application1\Domain\Controllers;

use Geekbrains\Application1\Application\Application;
use Geekbrains\Application1\Application\Render;
use Geekbrains\Application1\Application\Auth;
use Geekbrains\Application1\Domain\Models\User;
use Geekbrains\Application1\Domain\Controllers\AbstractController;

class UserController extends AbstractController
{

    protected array $actionsPermissions = [
        'actionHash' => ['admin', 'guest'],
        'actionSave' => ['admin'],
        'actionEdit' => ['admin'],
        'actionIndex' => ['admin'],
        'actionLogout' => ['admin'],
        'actionCreate' => ['admin'],
        'actionUpdate' => ['admin'],
        'actionDelete' => ['admin']
    ];

    public function actionIndex(): string
    {
        $users = User::getAllUsersFromStorage();

        $render = new Render();

        if (!$users) {
            return $render->renderPage(
                'user-empty.tpl',
                [
                    'title' => 'Список пользователей в хранилище',
                    'message' => "Список пуст или не найден"
                ]
            );
        } else {
            return $render->renderPage(
                'user-index.tpl',
                [
                    'title' => 'Список пользователей в хранилище',
                    'users' => $users
                ]
            );
        }
    }

    public function actionSave(): string
    {
        if (User::validateRequestData()) {
            $user = new User();
            $user->setParamsFromRequestData();
            $user->saveToStorage();

            $render = new Render();

            return $render->renderPage(
                'user-created.tpl',
                [
                    'title' => 'Пользователь создан',
                    'message' => "Создан пользователь " . $user->getUserName() . " " . $user->getUserLastName()
                ]
            );
        } else {
            throw new \Exception("Переданные данные некорректны");
        }
    }

    public function actionEdit(): string
    {

        $render = new Render();

        if (isset($_POST['id'])) {
            $userId = $_POST['id'];
            $action = 'update';
            $userData = User::getUserDataByID($userId);
        } else {
            $action = 'save';
        }

        return $render->renderPageWithForm(
            'user-form.tpl',
            [
                'title' => 'Форма создания пользователя',
                'user_data' => $userData ?? [],
                'action' => $action
            ]
        );
    }

    public function actionAuth(): string
    {
        $render = new Render();

        return $render->renderPageWithForm(
            'user-auth.tpl',
            [
                'title' => 'Форма логина'
            ]
        );
    }

    public function actionHash(): string
    {
        return Auth::getPasswordHash($_GET['pass_string']);
    }

    public function actionLogin(): string
    {
        $result = false;

        if (isset($_POST['login']) && isset($_POST['password'])) {
            $result = Application::$auth->proceedAuth($_POST['login'], $_POST['password']);
            if ($result && isset($_POST['user-remember']) && $_POST['user-remember'] == 'remember') {
                $token = Application::$auth->generateToken();

                User::setToken($_SESSION['id_user'], $token);
            }
        }

        if (!$result) {
            $render = new Render();

            return $render->renderPageWithForm(
                'user-auth.tpl',
                [
                    'title' => 'Форма логина',
                    'auth-success' => false,
                    'auth-error' => 'Неверные логин или пароль'
                ]
            );
        } else {
            header('Location: /');
            return "";
        }
    }

    public function actionLogout(): void
    {
        User::destroyToken();
        session_destroy();
        unset($_SESSION['auth']);
        header("Location: /");
        die();
    }

    public function actionUpdate(): string
    {
        if (User::exists($_POST['id'])) {
            $user = new User();
            $user->setUserId($_POST['id']);

            $arrayData = [];

            if (isset($_POST['name']))
                $arrayData['user_name'] = $_POST['name'];

            if (isset($_POST['lastname'])) {
                $arrayData['user_lastname'] = $_POST['lastname'];
            }

            if (isset($_POST['birthday'])) {
                $arrayData['user_birthday_timestamp'] = strtotime($_POST['birthday']);
            }

            $user->updateUser($arrayData);
        } else {
            throw new \Exception("Пользователь не существует");
        }

        $render = new Render();
        return $render->renderPage(
            'user-created.tpl',
            [
                'title' => 'Пользователь обновлен',
                'message' => "Обновлен пользователь " . $user->getUserId()
            ]
        );
    }

    public function actionDelete(): string
    {

        if ($_POST['id'] >= 0) {
            User::deleteFromStorage($_POST['id']);

            header('Location: /user');
            die();
        } else {
            throw new \Exception("Пользователь не существует");
        }
    }
}
