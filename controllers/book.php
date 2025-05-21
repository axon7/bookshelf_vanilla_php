<?php
$heading = "Book";


$config = require 'config.php';

$db = new Database($config, 'root', 'root');
$id = $_GET['id'] ?? null;

$query = "SELECT books.id, title, authors.full_name as 'author'
FROM books
INNER JOIN authors
ON books.author_id = authors.id
WHERE books.id = :id";

$book = $db->query($query, ['id' => $id])->find();


require 'views/book.view.php';
