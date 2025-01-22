<?php

require_once 'router.php';

$router = new Router();

$router->get('/', function() {
    include __DIR__ . '/../app/views/index.php';
});

$router->resolve();