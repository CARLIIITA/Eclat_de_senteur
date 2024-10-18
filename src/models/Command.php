<?php
require '../config/db.php';

$createCommand = function($totalPrice, $user_id) use ($db){
    $queryString = "INSERT INTO command (date_order, total, user_id) VALUES (UNIX_TIMESTAMP(), ?, ?)";
    $query = $db->prepare($queryString);
    $query->bind_param('di', $totalPrice, $user_id);

    $query->execute();
    $query->close();
};

