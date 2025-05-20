<?php
$heading = "Books";


$config = require 'config.php';

$db = new Database($config, 'root', 'root');

$query = "SELECT books.id, title, authors.full_name as 'author'
FROM books
INNER JOIN authors
ON books.author_id = authors.id;";

$books = $db->query($query)->fetchAll();




require 'views/books.view.php';
