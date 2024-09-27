
<?php 
$routes = [
    '/' => 'HomeController.php',
    '/cart' => 'CartController.php' 
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if(key_exists($uri, $routes)){
    require "../controllers/".$routes[$uri];
}