<?php
$heading = "Books";


$config = require 'config.php';

$db = new Database($config, 'root', 'root');

$query = "SELECT books.id, title, authors.full_name as 'author'
FROM books
INNER JOIN authors
ON books.author_id = authors.id;";

$books = $db->query($query)->get();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author_id = 1;

    $query = "INSERT INTO books (title, author_id) VALUES (:title, :author_id)";
    $db->query($query, [
        'title' => $title,
        'author_id' => $author_id
    ]);

    header('Location: /books');
}

require 'views/book-create.view.php';
