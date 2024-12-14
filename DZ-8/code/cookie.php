<?php

// setcookie("login", "admin", time()+3600, '/');

echo "<pre>";
print_r($_COOKIE);

// Регуляпрные выражения
// ^(?=.*\d)(?=.*[A-Za-z])(?=.*[^\s\w\d])(^\S{8,16})$

// $str = 'Password1!';
// $pattern = "/^(?=.*\d)(?=.*[A-Za-z])(?=.*[^\s\w\d])(^\S{8,16})$/";
// if(preg_match($pattern, $str)) {
//   echo "ok";
// } else {
//   echo "no";
// }