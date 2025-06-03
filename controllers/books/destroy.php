<?php

use Core\Database;

$heading = "Book";

$config = require base_path('config.php');
$db = new Database($config, 'root', 'root');

$id = $_GET['id'] ?? null;




$query = "DELETE FROM books WHERE id = :id";
$db->query($query, ['id' => $id]);

// add authorization check 

header('Location: /books');
exit();
