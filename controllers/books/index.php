<?php

use Core\Database;

$heading = "Books";


$config = require base_path('config.php');

$db = new Database($config, 'root', 'root');

$query = "SELECT books.id, title, authors.full_name as 'author'
FROM books
INNER JOIN authors
ON books.author_id = authors.id;";

$books = $db->query($query)->get();




view('books/index.view.php', [
    'heading' => $heading,
    'books' => $books
]);
