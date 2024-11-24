<?php

namespace App\Core;

use App\Core\View;

abstract class Controller
{
    protected function view($view = 'views/home', $datas = [], $layout = 'layouts/main')
    {
        $view = new view($view, $datas, $layout);
        $view->render();
    }
    protected function redirect($path)
    {
        header("Location: $path");
        exit();
    }
}
