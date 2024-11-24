<?php

namespace App\Models;

use App\Core\Model;
use PDO;

require '../config/constant.php';

class ProductModel extends Model
{

    public function __construct()
    {
        parent::__construct(DB_NAME, DB_USER);
    }

    public function getCarts()
    {
        $request = $this->connexion->query("SELECT * FROM cart");
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }
}
