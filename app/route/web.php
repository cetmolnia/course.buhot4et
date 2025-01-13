<?php 
use app\controllers\index\indexController;
use app\controllers\course\courseController;
use electronic\core\route\route;
use app\controllers\error\error;

if(!defined('ADMIN')){
    define('ADMIN', 'admin');
}

$route  = new route();

$route->get('/')->controller(indexController::class, 'index');
$route->get('/data')->controller(indexController::class, 'data');
$route->get('/courses/data/{slug}')->controller(courseController::class, 'data');
$route->get('/courses/info/{slug}')->controller(courseController::class, 'index');
$error = (new error())->error404();