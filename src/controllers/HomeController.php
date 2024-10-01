<?php
require '../models/Product.php';
$products = $getAllProducts();

if(isset($_GET['addProduct'])){
    $product = $getProductById($_GET['addProduct']);
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = array($product);
    } else {
        $_SESSION["cart"][] = $product;
    }
}

require 'views/home.view.php';