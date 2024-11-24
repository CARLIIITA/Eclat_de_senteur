<?php

namespace App\Controllers;



use App\Core\Controller;

class CartController extends Controller
{
    public function __construct() {}
    private function totalPrice()
    {
        return array_reduce($_SESSION['cart'], function ($acc, $product) {
            $acc += $product['price'];
            return $acc;
        }, 0);
    }

    public function delete($id = null)
    {
        if (isset($_GET['id'])) {
            unset($_SESSION['cart'][$_GET['id']]);
        }
        $this->redirect('/cart');
    }

    public function cart()
    {
        $totalPrice = $this->totalPrice();
        $this->view('views/cart', [
            'cart' => $_SESSION['cart'],
            'totalPrice' => $totalPrice
        ]);
        // var_dump($_SESSION['cart']);
    }
}
