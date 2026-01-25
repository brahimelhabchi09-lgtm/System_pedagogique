<?php

namespace Core\Router;

class Router
{
    private array $routes = [];

    public function __construct()
    {

    }

    public function get(string $uri, string $action, array $middleware = [])
    {
        $this->routes['GET'][$uri] = ['action' => $action, 'middleware' => $middleware];
    }

    public function post(string $uri, string $action, array $middleware = [])
    {
        $this->routes['POST'][$uri] = ['action' => $action, 'middleware' => $middleware];
    }

    public function dispatch()
    {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $requestMethod = $_SERVER['REQUEST_METHOD'];

        if (isset($this->routes[$requestMethod][$uri])) {
            if (!empty($this->routes[$requestMethod][$uri]['middleware'])) {
                foreach ($this->routes[$requestMethod][$uri]['middleware'] as $middlewareClass) {
                    $middlewareName = "App\Middleware\\$middlewareClass";
                    $middleware = new $middlewareName();
                    $middleware->handle();
                }
            }
            [$controllerName, $methodName] = explode('@', $this->routes[$requestMethod][$uri]['action']);

            $controllerClass = "App\Controller\\$controllerName";
            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();
                if (method_exists($controller, $methodName)) {
                    $controller->$methodName();
                    return;
                }
            }
        }

        echo "404 Not Found";
    }
}
