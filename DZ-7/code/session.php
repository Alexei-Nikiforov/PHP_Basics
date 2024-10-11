<?php
session_start();
$_SESSION['message'] = 'Пользователь удален';


echo $_SESSION['message'] = 'admin';

// Удаление сессии
// unser($_SESSION['message']);
// session_destroy();

