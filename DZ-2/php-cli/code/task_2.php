<?php

function mathOperations($arg1, $arg2, $operation) {
  switch ($operation) {
    case 'summ':
      return $arg1 + $arg2;
      break;
    case 'subtract':
      return $arg1 - $arg2;
      break;
    case 'multiply':
      return $arg1 * $arg2;
      break;
    case 'divides':
      if($arg2 != 0) {
        return $arg1 / $arg2;
      } else {
        return "Ошибка: на ноль делить нельзя";
      }
      break;
    default:
      return "Что то пошло не так. Попробуйте позже.";
  }
}

// Примеры использования функции
echo mathOperations(2.5, 5, 'summ') . PHP_EOL; // Выведет 7.5
echo mathOperations(2.5, 5, 'subtract') . PHP_EOL; // Выведет -2.5
echo mathOperations(2.5, 5, 'multiply') . PHP_EOL; // Выведет 12.5
echo mathOperations(2.5, 5, 'divides') . PHP_EOL; // Выведет 0.5
echo mathOperations(2.5, 0, 'divides') . PHP_EOL; // Выведет Ошибка: на ноль делить нельзя
echo mathOperations(2.5, 5, 'dividesss'); // Выведет Что то пошло не так. Попробуйте позже.

//docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/code/task_2.php