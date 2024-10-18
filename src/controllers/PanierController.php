<?php
// session_start();

require '../models/Command.php';

if(isset($_SESSION['panier'])){

    $totalPrice = array_reduce($_SESSION["panier"], function ($acc, $product) {
        $acc += ($product["price"] * $product['quantity']);
        return $acc;
    }, 0);
    
    function findProductPanier($id){
        foreach($_SESSION['panier'] as $key => $product){
            if($product['id'] === $id){
                // var_dump($key);
                return $key;
                break;
            }
        }
    }
    
function updateProductQuantityPanier($key, $quantity): bool {
    if(!isset($_SESSION['panier'][$key])) return false;
    $_SESSION['panier'][$key]['quantity'] += $quantity;
    return true;
}

if(isset($_GET['validation'])){
    if(!isset($_SESSION['user'])){
        $_SESSION['required_auth']['path'] = $_SERVER['request_uri'];
        $_SESSION['required_auth']['message'] = 'Pour finalisez votre commande, connectez vous.';
        header('location: /connexion');
    }
    $createCommand($totalPrice, $_SESSION['user']['id']);
    $_SESSION['message']['info'] = 'votre commande a bien été enregistrer';
    header('location: /');
}

if(isset($_POST['update_quantity'])){
    $keyPanier = findProductPanier($_POST['id_product']);
    updateProductQuantityPanier($keyPanier, $_POST['quantity']);
    $totalPrice = array_reduce($_SESSION["panier"], function ($acc, $product) {
        $acc += ($product["price"] * $product['quantity']);
        return $acc;
    }, 0);
} 

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

}
require 'views/panier.view.php';