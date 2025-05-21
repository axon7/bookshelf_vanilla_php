<?php
$heading = "Books";
require 'Validator.php';

$config = require 'config.php';

$db = new Database($config, 'root', 'root');

$query = "SELECT books.id, title, authors.full_name as 'author'
FROM books
INNER JOIN authors
ON books.author_id = authors.id;";

$books = $db->query($query)->get();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];


    $title = $_POST['title'];
    $author_id = 1;



    if (empty($title)) {
        $errors['title'] = 'Title is required';
    } else {
        if (! Validator::string($title, 1, 1000)) {
            $errors['title'] = 'Title must be less than 1000 characters';
            var_dump($errors);
        }
    }
    if (empty($errors)) {


        $query = "INSERT INTO books (title, author_id) VALUES (:title, :author_id)";
        $db->query($query, [
            'title' => $title,
            'author_id' => $author_id
        ]);
        header('Location: /books');
    }
}

require 'views/books/create.view.php';
