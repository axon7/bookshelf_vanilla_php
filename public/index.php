<?php


const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'functions.php';

spl_autoload_register(function ($class) {
    require base_path("Core/" . $class . '.php');
});

require base_path('router.php');




$config = require 'config.php';
$db = new Database($config, 'root', 'root');
$query = "SELECT * FROM books where id = :id";
$id = $_GET['id'] ?? null;
$books = $db->query($query, [':id' => $id])->find();

require 'router.php';
