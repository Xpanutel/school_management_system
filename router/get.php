<?php

$router->get('/', function () {
    include __DIR__ . '/../app/views/index.php';
});

$router->get('/auth', function () {
    include __DIR__ . '/../app/views/auth.php';
});

$router->get('/docs', function () {
    include __DIR__ . '/../app/views/documents.php';
});

$router->get('/olympiads', function () {
    include __DIR__ . '/../app/views/olympiads.php';
});

$router->get('/password', function () {
    include __DIR__ . '/../app/views/password.php';
});

$router->get('/schedule', function () {
    include __DIR__ . '/../app/views/schedule.php';
});

$router->get('/teacher_profile', function () {
    include __DIR__ . '/../app/views/teacher_profile.php';
});
