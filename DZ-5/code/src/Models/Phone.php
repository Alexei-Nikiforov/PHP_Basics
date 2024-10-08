<?php

namespace Geekbrains\Application1\Models;

class Phone {

  private string $phone;

  public function __construct() {
    $this->phone = '+7 (900) 223-322';
  }

  public function getPhone() {
    return $this->phone;
  }

}