<?php

use Controllers\AuthController;
use Controllers\HomeController;
use Core\View;

$route = match ($_SERVER['REQUEST_METHOD']) {
    "POST" => match ($_SERVER['REQUEST_URI']) {
        '/login' => (new AuthController)->login(),
        default => "this route not found"
    },
    "GET" => match ($_SERVER['REQUEST_URI']) {
        '/' => (new HomeController)->home(),
        '/login' => (new AuthController)->login(),
        '/dashboard' => View::load('dashboard/dashboard'),
        '/dashboard-articles' => View::load('dashboard/articles'),
        default => "this route not found"
    },
    default => "this request method  not found"
};


echo $route;
