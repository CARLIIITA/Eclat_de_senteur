<?php

namespace App\Models;

use App\Core\Model;
use PDO;

require '../config/constant.php';

class UserModel extends Model
{

    public function __construct()
    {
        parent::__construct(DB_NAME, DB_USER);
    }

    public function getUsers()
    {
        $request = $this->connexion->query("SELECT * FROM user LIMIT 5");
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }
}
