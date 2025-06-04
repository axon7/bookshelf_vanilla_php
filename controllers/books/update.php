<?php

use Core\App;
use Core\Validator;

$db = App::resolve('Core\Database');


$errors = [];
$title = $_POST['title'];
$author_id = 1;
$id = $_POST['id'] ?? null;
$heading = "Books";


$book = $db->query("SELECT * FROM books WHERE id = :id", ['id' => $_POST['id']])->findOrFail();

if (empty($title)) {
    $errors['title'] = 'Title is required';
} else {
    if (! Validator::string($title, 1, 1000)) {
        $errors['title'] = 'Title must be less than 1000 characters';
    }
}


if (count($errors)) {

    return view('books/edit.view.php', [
        'heading' => $heading,
        'errors' => [],
        'title' => $title,
        'book' => $book,

        'author_id' => $author_id
    ]);
}


$query = "UPDATE books set title = :title where id = :id";
$db->query($query, [
    'title' => $title,
    'id' => $id
]);
header('Location: /books');
die();
