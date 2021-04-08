<?php

require_once 'functions/connection.php';



// ===== получаем GET строку =====
$url = $_GET['route']; // NULL!
$route = explode("/", $url);


switch ($route) {

        // 
    case $route[0] == '':
        require_once 'php/index.php';
        break;
    case $route[0] == 'list':
        require_once 'php/list.php';
        break;
    case ($route[0] == 'message' and isset($route[1])):
        $userId = $route[1];
        require_once 'php/message.php';
        break;

        // отправляет на '404.php'
    default:
        require_once 'php/404.php';
        break;
}
