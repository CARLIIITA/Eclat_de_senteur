
<?php 
$routes = [
    '/' => 'HomeController.php',
    '/connexion' => 'ConnexionController.php',
    '/inscription' => 'InscriptionController.php',
    '/deconnexion' => 'DeconnexionController.php',
    '/membre' => 'MembreController.php',
    '/panier' => 'PanierController.php',
    '/parfums' => 'PerfumeController.php',
    '/brumes' => 'BrumeController.php',
    '/huiles' => 'HuileController.php',
    '/muscs' => 'MuscController.php',
    '/lotions' => 'LotionController.php'

];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if(key_exists($uri, $routes)){
    require "../controllers/".$routes[$uri];
}else{
    require_once($_SERVER['DOCUMENT_ROOT'] . '/views/404.php'); 
}