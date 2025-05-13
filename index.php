<?php
require 'functions.php';


$servername = "localhost";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;port=3306;dbname=bookshelf_vanilla_php", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

$sql = "SELECT * FROM books";
$stmt = $conn->prepare($sql);
$stmt->execute();
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
// print $books;
// echo "<pre>";
echo '<pre>';
print_r($books);
echo '</pre>';
// echo "</pre>";
// die();
// echo "<pre>";


require 'router.php';
