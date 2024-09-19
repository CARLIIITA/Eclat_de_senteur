<?php

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function __construct() {}

    public function home()
    {
        $this->view('views/home');
    }
}
