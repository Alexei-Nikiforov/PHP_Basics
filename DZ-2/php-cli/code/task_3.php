<?php

$regions = [
  'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
  'Ленинградская область' => ['Санкт-Петербург', 'Всеполжск', 'Павловск', 'Кроншдат'],
  'Рязанская область' => ['Рязань', 'Касимов', 'Скопин'],
  // и другие
];

function parsRegions(array $regions) : string {
  $line = "";
  foreach($regions as $key => $region) {
    $line .= "$key: ";
    $last = count($region) - 1;
    for ($i=0; $i < $last; $i++) {
      $line .= "$region[$i], ";
    }
    $line .= $region[$last] . PHP_EOL;
  }
  return $line;
}

// Примеры использования функции
echo parsRegions($regions);

//docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/code/task_3.php