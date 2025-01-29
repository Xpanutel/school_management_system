<?php

// класс для подключения к бд
require_once 'config/db_connect.php';
// конфиг с данными для подключения к бд
require_once 'dbconfig.php';
// роутер
require_once 'router/router.php';
$router = new Router();

$dbconnect = new DataBaseConnect();
$dbconnect->dbConnect(host, user, pass, dbname);

if($dbconnect) {
    // маршруты - геттеры
    include "router/get.php";

    $router->resolve();
} else {
    echo "Подключение не успешно";
}
