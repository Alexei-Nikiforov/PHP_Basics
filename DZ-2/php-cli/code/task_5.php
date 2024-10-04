<?php

function power(float $val, int $pow) : float {
  if ($pow == 0) {
    return 1;
  } elseif ($pow > 0) {
    return $val * power($val, $pow-1);
  } else {
    return 1 / power($val, -$pow);
  }
}

// Примеры использования функции
echo power(2.5,3) . PHP_EOL; // Выведет 15.65
echo power(2.5,-3); // Выведет 0.064
//docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/code/task_5.php