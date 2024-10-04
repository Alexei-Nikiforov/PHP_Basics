<?php

function summ($arg1, $arg2) {
  return $arg1 + $arg2;
}

function subtract($arg1, $arg2) {
  return $arg1 - $arg2;
}

function multiply($arg1, $arg2) {
  return $arg1 * $arg2;
}

function divides ($arg1, $arg2) {
  if($arg2 != 0) {
    return $arg1 / $arg2;
  } else {
    return "Ошибка: на ноль делить нельзя";
  }
}


// Примеры использования функции
echo summ(2.5,5) . PHP_EOL; // Выведет 7.5
echo subtract(2.5,5) . PHP_EOL; // Выведет -2.5
echo multiply(2.5,5) . PHP_EOL; // Выведет 12.5
echo divides(2.5,5) . PHP_EOL; // Выведет 0.5
echo divides(2.5,0); // Выведет Ошибка: на ноль делить нельзя

//docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/code/task_1.php