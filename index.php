<?php

// класс для подключения к бд
require_once 'config/db_connect.php';
// конфиг с данными для подключения к бд
require_once 'dbconfig.php';

$dbconnect = new DBconnect(host, user, pass, dbname);

if($dbconnect) {
    echo "Подключение успешно";
} else {
    echo "Подключение не успешно";
}

// роутер
require_once 'router/router.php';
$router = new Router();

// маршруты - геттеры
$router->get('/', function() {
    include 'app/views/index.php';
});

$router->resolve();