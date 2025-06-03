<?php

use Core\Database;
use Core\Validator;

$heading = "Books";

$config = require base_path('config.php');

$db = new Database($config, 'root', 'root');


$errors = [];
$title = $_POST['title'];
$author_id = 1;

if (empty($title)) {
    $errors['title'] = 'Title is required';
} else {
    if (! Validator::string($title, 1, 1000)) {
        $errors['title'] = 'Title must be less than 1000 characters';
    }
}

if (!empty($errors)) {
    view('books/create.view.php', [
        'heading' => $heading,
        'errors' => $errors,
        'title' => $title,
        'author_id' => $author_id
    ]);
    exit();
}



if (empty($errors)) {
    $query = "INSERT INTO books (title, author_id) VALUES (:title, :author_id)";
    $db->query($query, [
        'title' => $title,
        'author_id' => $author_id
    ]);
    header('Location: /books');
    die();
}
