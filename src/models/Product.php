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

$getProductByCategory = function($nameCategory) use($db) {
    $queryGetCategoryByName = $db->query("SELECT id FROM categorie WHERE name='$nameCategory'"); // <- Ici on récupère l'id de la  catégorie par son nom par exemple 'Musc' 
    $categoryId = $queryGetCategoryByName->fetch_assoc(); // <- On essaye de récupèrer les entrées qui corresponds à la requête

    if(!$queryGetCategoryByName->num_rows) throw new Error("La categorie $nameCategory n'existe pas"); // <- Si jamais il n'y a aucun résultat qui correspond
    //<- à la requête alors on lui affiche une erreur (num_rows retourne le nombre d'occurence que présente la requête)

    $productsByCategoryId = $db->query("SELECT * FROM product WHERE categorie_id='$categoryId[id]'"); // <- Ici on récupère les produit grace à l'id catégorie récupérer
    return $productsByCategoryId->fetch_all(MYSQLI_ASSOC); // <- Ici on récupère toutes les occurences concernant la requête.
};

// $getProductByCategorie = function  () use($db) {};

$getProductById = function($id) use ($db){
    $product = $db->query("SELECT * FROM product WHERE id = '$id'");
    return $product->fetch_assoc();
};