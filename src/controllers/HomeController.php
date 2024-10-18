<?php
require '../models/Product.php';

$products = $getAllProducts();

if(isset($_GET['ajouter'])){    
    $product = array(...$getProductById($_GET['ajouter']), 'quantity' => 1);
    $productExist = null;
    if(!isset($_SESSION['panier'])){
        $_SESSION['panier'] = array($product);
    }else {
        foreach($_SESSION['panier'] as $key => $productSearch){
            if($productSearch['id'] === $_GET['ajouter']){
                $_SESSION['panier'][$key]['quantity'] += 1;
                $productExist = $key;
                break;
              } else {
                $productExist = false;
              }
        }
        if($productExist === false){
            $_SESSION['panier'][] = $product;
        }
    }
    header('location: /');
}

require 'views/home.view.php';
