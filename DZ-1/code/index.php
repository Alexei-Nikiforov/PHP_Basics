<?php

// echo "Привет, GeekBrains!<br>".date("Y-m-d H:i:s") ."<br><br>";

// echo "Что-то еще 123456";

// phpinfo();

// $name = "Admin";

// var_dump ($name);

echo ("Task-1");
// Окружение собрано

echo ("Task-2"); // В 8.2

$a = 5;
$b = '05';

var_dump($a == $b); // будет true, т.к. оператор "==" сравнивает значения, игнорируя типы
var_dump((int)'012345'); // выведет 12345, потому что строки приводятся к целочисленному типу
var_dump((float)123.0 === (int)123.0); // будет false, т.к. типы данных будут отличаться
var_dump(0 == 'hello, world'); // будет false, т.к. типы данных будут отличаться

# docker run --rm -v ${pwd}/php-cli/:/cli php:8.2-cli php /cli/start.php

echo ("Task-3"); // В 7.4

$a = 5;
$b = '05';

var_dump($a == $b); // будет true, т.к. оператор "==" сравнивает значения, игнорируя типы
var_dump((int)'012345'); // выведет 12345, потому что строки приводятся к целочисленному типу
var_dump((float)123.0 === (int)123.0); // будет false, т.к. типы данных будут отличаться
var_dump(0 == 'hello, world'); // будет true

# docker run --rm -v ${pwd}/php-cli/:/cli php:7.4-cli php /cli/start.php

echo ("Task-4");

$a = 1;
$b = 2;
var_dump($a);
var_dump($b);

$b = $b - $a;
$a = $a + $a;
echo ("После преобразований:");
var_dump($a);
var_dump($b);