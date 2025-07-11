<?php

namespace App;

class Router
{
    protected $routes = [];

    public function add($route, $controller, $action)
    {
        $this->routes[$route] = ['controller' => $controller, 'action' => $action];
    }

    public function dispatch($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $action = $this->routes[$uri]['action'];

            $controller = new $controller();
            $controller->$action();
        } else {
            // Handle 404 Not Found
            header("HTTP/1.0 404 Not Found");
            echo '404 Not Found';
        }
    }
}
