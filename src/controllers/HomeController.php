<?php
require '../models/Product.php';

$products = $getAllProducts();

if(isset($_GET['ajouter'])){
    $product = $getProductById($_GET['ajouter']);
    if(!isset($_SESSION["panier"])){
        $_SESSION["panier"] = array($product);
    } else {
        $_SESSION["panier"][] = $product;
    }
}

require 'views/home.view.php';
