<?php

use Core\Database;

$heading = "Book";


$config = require base_path('config.php');

$db = new Database($config, 'root', 'root');
$id = $_GET['id'] ?? null;

$query = "SELECT books.id, title, authors.full_name as 'author'
FROM books
INNER JOIN authors
ON books.author_id = authors.id
WHERE books.id = :id";

$book = $db->query($query, ['id' => $id])->find();


view('books/show.view.php', [
    'heading' => $heading,
    'book' => $book
]);
