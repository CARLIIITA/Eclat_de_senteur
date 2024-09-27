<?php
// session_start();
$totalPrice = array_reduce($_SESSION["cart"], function ($acc, $product) {
    $acc += $product["price"];
    return $acc;
}, 0);


if(isset($_GET['delete'])){
    // var_dump(array_search($_GET['delete'], ));
    $findProduct = array_filter($_SESSION["cart"], function($product){
        return $product['id'] === $_GET['delete'];
    });
    foreach($findProduct as $key => $product){
        unset($_SESSION['cart'][$key]);
    }
    header('location: /cart');
}
require '../public/views/cart.view.php';