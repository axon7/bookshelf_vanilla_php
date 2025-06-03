<?php

use Core\Validator;
use Core\App;

$heading = "Books";
$db = App::resolve('Core\Database');


$query = "SELECT books.id, title, authors.full_name as 'author'
FROM books
INNER JOIN authors
ON books.author_id = authors.id;";

$books = $db->query($query)->get();



view('books/create.view.php', [
    'heading' => $heading,
    'errors' => $errors ?? [],
]);
