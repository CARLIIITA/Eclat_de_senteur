<?php

if(!isset($_SESSION['user'])){
    header('location: /connexion');
}


require 'views/membre.view.php';
