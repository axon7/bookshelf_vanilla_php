<?php
require 'functions.php';


require 'Database.php';

$config = require 'config.php';

$db = new Database($config, 'root', 'root');

$books = $db->query("SELECT * FROM books")->fetchAll();

print_r($books);
require 'router.php';
