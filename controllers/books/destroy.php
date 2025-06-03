<?php

use Core\App;

$heading = "Book";

$db = App::resolve('Core\Database');

$id = $_GET['id'] ?? null;




$query = "DELETE FROM books WHERE id = :id";
$db->query($query, ['id' => $id]);

// add authorization check 

header('Location: /books');
exit();
