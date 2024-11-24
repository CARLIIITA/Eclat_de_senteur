<?php

namespace App\Controllers;

use App\Core\Controller;

class Page404Controller extends Controller
{

    public function page404($uri)
    {
        $this->view('views/404', [
            'title' => 'Not found',
            'page' => $uri
        ]);
    }
}
