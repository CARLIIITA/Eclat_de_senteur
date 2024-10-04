<?php

require '../models/User.php';

if(isset($_POST['enregistrer'])){
    $inscription($_POST);
}

require 'views/inscription.view.php';