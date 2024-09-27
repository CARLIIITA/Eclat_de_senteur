<?php
require '../models/Product.php';
$products = $getAllProducts();

if(isset($_GET['addProduct'])){
    if(!isset($_SESSION["cart"])){
        $_SESSION["cart"] = [];
    } else {
        $product = $getProductById($_GET['addProduct']);
        $_SESSION["cart"][] = $product;
    }
}

require '../public/views/home.view.php';