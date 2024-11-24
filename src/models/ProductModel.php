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

    public function getProducts()
    {
        $request = $this->connexion->query("SELECT * FROM product LIMIT 4");
        return $request->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getProductById($id)
    {
        $request = $this->connexion->query("SELECT * FROM product WHERE id = $id");
        return $request->fetch(PDO::FETCH_ASSOC);
    }
}
