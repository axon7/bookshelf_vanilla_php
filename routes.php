<?php


// $routes = [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     // '/contact' => 'controllers/contact.php',
//     '/books' => 'controllers/books/index.php',
//     '/book' => 'controllers/books/show.php',
//     '/books/create' => 'controllers/books/create.php',
// ]; 


$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');

$router->get('/books', 'controllers/books/index.php');
$router->get('/book', 'controllers/books/show.php');
$router->delete('/book', 'controllers/books/destroy.php');

$router->get('/books/create', 'controllers/books/create.php');
$router->post('/books', 'controllers/books/store.php');
