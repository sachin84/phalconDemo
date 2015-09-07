<?php

use Phalcon\Mvc\Router;
use Phalcon\Mvc\Router\Group as RouterGroup;


$di->set('router', function() {
    $router = new Router();
    $routes = require_once __DIR__ . '/../../config/routing.php';

    foreach ($routes as $route => $routeConfig) {
        if (empty($routeConfig['methods'])) {
            throw new PhalconRouteException("Invalid HTTP method for $route");
        }

        $router->add($route, $routeConfig['target'])->via($routeConfig['methods']);
    }

    return $router;
});

