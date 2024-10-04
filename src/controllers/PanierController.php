<?php
// session_start();
$totalPrice = array_reduce($_SESSION["panier"], function ($acc, $product) {
    $acc += $product["price"];
    return $acc;
}, 0);

if(isset($_GET['supression'])){
    // var_dump(array_search($_GET['delete'], ));
    $findProduct = array_filter($_SESSION["panier"], function($product){
        return $product['id'] === $_GET['supression'];
    });
    foreach($findProduct as $key => $product){
        unset($_SESSION['panier'][$key]);
    }
    header('location: /panier');
}

require 'views/panier.view.php';