<?php

function routeToController($uri, $routes) {

    if (array_key_exists($uri, $routes)) {
        // dd("true...");
        require $routes[$uri];
    } else {
        // dd("false");
        abort();
    }
}   

function abort($code = 404) {
    http_response_code($code);

    require "views/{$code}.php";

    die();
}

$routes = require('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);