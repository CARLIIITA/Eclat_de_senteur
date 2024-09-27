<?php

require '../config/db.php';



$getAllProducts = function () use($db) {
    try {

        $query = $db->query('SELECT *  FROM product LIMIT 5');
        $products = $query->fetch_all(MYSQLI_ASSOC);
        return $products;

    }catch(Exception $error){
        die('error request: '. $error->getMessage());
    }
};

// $getProductByCategorie = function  () use($db) {};

$getProductById = function(int $id) use ($db){
    $product = $db->query("SELECT * FROM product id = '$id'");
    return $product->fetch_row();
};