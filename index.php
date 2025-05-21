<?php
require 'functions.php';
require 'Database.php';
require 'Response.php';

$config = require 'config.php';
$db = new Database($config, 'root', 'root');
$query = "SELECT * FROM books where id = :id";
$id = $_GET['id'] ?? null;
$books = $db->query($query, [':id' => $id])->find();

require 'router.php';
