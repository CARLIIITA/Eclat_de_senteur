<?php
require '../../vendor/autoload.php';

use App\Controllers\HomeController;

use App\Core\Router;


$router = new Router();

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$router

    ->addRoute('/', HomeController::class, 'home')
    ->dispatch($uri);
