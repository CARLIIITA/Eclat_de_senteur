<?php

namespace App\Controllers;



use App\Core\Controller;
use App\Models\UserModel;
use App\Models\ProductModel;

class HomeController extends Controller
{
    // private $repositoryUser;
    private $repositoryProduct;
    public function __construct()
    {
        // $this->repositoryUser = new UserModel();
        $this->repositoryProduct = new ProductModel();
    }
    public function cart()
    {
        if (isset($_GET['addProduct'])) {
            $idProduct = $_GET['addProduct'];
            $product = $this->repositoryProduct->getProductById($idProduct);
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
                $_SESSION['cart'][$product['id']] = $product;
            } else {
                $_SESSION['cart'][$product['id']] = $product;
            }
        }
    }

    public function home()
    {
        $this->cart();
        $products = $this->repositoryProduct->getProducts();
        // var_dump($products);
        $this->view('views/home', ['products' => $products]);
        // header("Cache-Control: public");
    }
}
