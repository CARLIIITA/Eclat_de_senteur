<?php

require '../models/User.php';

$connexion;
if(isset($_POST['connexion'])){
    $connexion = $authentification($_POST['email'], $_POST['motDePasse']);
    if($connexion === false){
        echo "Votre Mot de passe ou votre mail sont incorrecte";
    }else{
        $_SESSION['user'] = $connexion;
        header('location: /membre');
    }
}

require 'views/connexion.view.php';