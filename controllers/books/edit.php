<?php

use Core\Validator;
use Core\App;

$heading = "Books";
$db = App::resolve('Core\Database');


$id = $_GET['id'] ?? null;


$query = "SELECT books.id, title, authors.full_name as 'author' FROM books INNER JOIN authors ON books.author_id = authors.id WHERE books.id = :id";
$book = $db->query($query, ['id' => $id])->find();

view('books/edit.view.php', [
    'heading' => $heading,
    'errors' => $errors ?? [],
    'book' => $book
]);
