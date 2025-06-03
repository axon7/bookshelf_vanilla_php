<?php


const BASE_PATH = __DIR__ . '/../';

require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    require base_path("{$class}.php");
});


$config = require base_path('config.php');
$db = new Core\Database($config, 'root', 'root');
$query = "SELECT * FROM books where id = :id";
$id = $_GET['id'] ?? null;
$books = $db->query($query, [':id' => $id])->find();

require base_path('Core/router.php');
