<?php

require '../models/User.php';

$connexion;
if(isset($_SESSION['required_auth']['message'])){
    $requiredAuthMessage = $_SESSION['required_auth']['message'];
    $requiredAuthPath = $_SESSION['required_auth']['path'];
    unset($_SESSION['required_auth']);
}

if(isset($_POST['connexion'])){
    $connexion = $authentification($_POST['email'], $_POST['motDePasse']);
    if($connexion === false){
        echo "Votre Mot de passe ou votre mail sont incorrecte";
    }else{
        $_SESSION['user'] = $connexion;
        if(isset($requiredAuthPath)){
            header("location: $requiredAuthPath");
        }else{
            var_dump($_SESSION['required_auth']);
            // header('location: /membre');
        }
    }
}

require 'views/connexion.view.php';