<?php

namespace App\Core;

class Router
{
    private $routes = [];
    public function addRoute($uri, $Controller, $method)
    {
        $this->routes[$uri] = ['Controller' => $Controller, 'method' => $method];
        return $this;
    }
    public function dispatch($uri)
    {
        foreach ($this->routes as $uriPath => $infos) {
            extract($infos);
            $routing = preg_match("#^$uriPath$#", $uri, $matches);
            if ($routing) {
                $controller = new $Controller();
                $controller->$method();
            }
        }
    }
}
