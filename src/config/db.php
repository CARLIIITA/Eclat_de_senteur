<?php

try  {
    $db = new mysqli('localhost', 'carla', 'password', 'eclat_de_senteur');
    $db->set_charset('utf8mb4');
} catch(Exception $error) {
    die();
    echo 'error: '.$error->getMessage();
}
