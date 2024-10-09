<?php

namespace Geekbrains\Application1\Controllers;

use Geekbrains\Application1\Models\Phone;
use Geekbrains\Application1\Render;

class AboutController
{
  public function actionIndex() {
    $phone = (new Phone())->getPhone();
    $render = new Render();

    return $render->renderPage('about.twig', [
      'phone' => $phone,
      'dataTime' => date("d/m/Y") ,
      'time' => date('H:i', (time()+60*60*3))
    ]);
  }
}