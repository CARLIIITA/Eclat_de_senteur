<?php

require '../models/Product.php';

try {
    $huiles = [
        ...$getProductByCategory('Huile'), // <- Ici on récupère la catégorie des brumes 
    ];
    // Le spread operator "..." au début des fonction sert simplement à exploser le tableau des entrés renvoyer par SQL dans le tableau qui l'engloble
    // Exemple si vous avez un tableau [ ...['toto'] ] alors le tableau avec le spread donnera ['toto']
    
}catch(Exception $e){
    die('Error: '.$e->getMessage());
}
// var_dump($results);
require 'views/huile.view.php';