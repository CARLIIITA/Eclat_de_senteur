<?php

namespace App\Core;

use PDO;

abstract class Model
{
    protected PDO $connexion;

    protected function __construct($dbname = null, $user = null, $driver = 'mysql', $host  = 'localhost')
    {
        $this->connexion = new PDO("$driver:host=$host;dbname=$dbname;charset=utf8", $user, 'password');
    }
}
