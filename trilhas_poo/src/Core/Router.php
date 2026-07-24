<?php

namespace App\Core;

class Router {
    private array $routes = [];

    public function post(string $path, array $controllerAction) {
        $this->routes['POST'][$path] = $controllerAction;
    }

    public function dispatch(string $path, string $method) {
        if (!isset($this->routes[$method][$path])) {
            die("404 - Rota não encontrada");
        }

        [$controllerClass, $methodName] = $this->routes[$method][$path];
        
        // Magia do PHP: instancia a classe e chama o método
        $controller = new $controllerClass();
        $controller->$methodName();
    }
}