<?php
require '../../vendor/autoload.php';
session_start();

use App\Controllers\HomeController;
use App\Controllers\CartController;
use App\Controllers\Page404Controller;

use App\Core\Router;


$router = new Router();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router

    ->addRoute('/', HomeController::class, 'home')
    ->addRoute('/cart', CartController::class, 'cart')
    ->addRoute('/cart/delete', CartController::class, 'delete')
    ->dispatch($uri);
