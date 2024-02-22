<?php

$url = parse_url($_SERVER['REQUEST_URI'])['path'];

// if ($url === '/') {
//     require 'controllers/index.php';
// } else if ($url === '/about') {
//     require 'controllers/about.php';
// } else if ($url === '/contact') {
//     require 'controllers/contact.php';
// }

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'

];



function routeToController($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require 'views/404.php';
    die();
}

routeToController($url, $routes);