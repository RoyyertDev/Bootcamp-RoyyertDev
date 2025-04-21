<?php

namespace Config;

class Route
{
    private static $routes = [];

    public static function get($uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes['GET'][$uri] = $callback;
    }

    public static function post($uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes['POST'][$uri] = $callback;
    }

    public static function put($uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes['PUT'][$uri] = $callback;
    }

    public static function path($uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes['PATH'][$uri] = $callback;
    }

    public static function delete($uri, $callback)
    {
        $uri = trim($uri, '/');
        self::$routes['DELETE'][$uri] = $callback;
    }

    public static function dispatch()
    {
        $uri = $_SERVER['REQUEST_URI'];
        $uri = trim($uri, '/');

        $method = $_SERVER['REQUEST_METHOD'];

        foreach (self::$routes[$method] as $route => $callback) {
            if ($route == $uri) {
                $callback();
                return;
            }
        }
        require_once '../Views/404.php';
    }
}
// private $routes = [
//     'GET' => [
//         '/login' => 'loginController',
//     ],
//     'POST' => [
//         '/login' => 'loginController',
//     ],
// ];