<?php
$uri = $_SERVER['REQUEST_URI'];



$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php',
    '/books' => 'controllers/books.php',
];

function routeToController($url, $routes)
{
    if (array_key_exists($url, $routes)) {
        require $routes[$url];
    } else {
        http_response_code(404);
        require 'views/404.php';
        die();
    }
}


routeToController($uri, $routes);
