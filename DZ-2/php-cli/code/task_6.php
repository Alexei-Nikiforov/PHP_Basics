<?php

function formatTime() {
  $h = date('H');
  $m = date('i');

  if($h == 1 || $h == 21) {
    $hours = " час";
  } elseif ((($h >= 2) && ($h <= 4)) || (($h >= 22) && ($h <= 23))) {
    $hours = " часа";
  } else {
    $hours = " часов";
  }

  if (($m != 11) && ($m % 10 === 1)) {
    $minutes = " минута";
  } elseif ((($m % 10) >= 2) && (($m % 10) <= 4)) {
    $minutes = " минуты";
  } else {
    $minutes = " минут";
  }

  return $h . $hours . " " . $m . $minutes;
}

// Примеры использования функции
echo formatTime(); // Выведет 13 часов 56 минут

//docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/code/task_6.php