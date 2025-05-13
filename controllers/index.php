

<?php
// echo "<pre>";
// var_dump($_SERVER);
// echo "</pre>";
// die();
$books = [
  [
    "name" => "The Great Gatsby",
    "author" => "F. Scott Fitzgerald",
    "year" => 1925
  ],
  [
    "name" => "To Kill a Mockingbird",
    "author" => "Harper Lee",
    "year" => 1960
  ],
  [
    "name" => "1984",
    "author" => "George Orwell",
    "year" => 1949
  ],
  [
    "name" => "Pride and Prejudice",
    "author" => "Jane Austen",
    "year" => 1813
  ],

];


function filter($items, $fn)
{
  $filteredItems = [];
  foreach ($items as $item) {
    if ($fn($item)) {
      $filteredItems[] = $item;
    }
  }

  return $filteredItems;
}

$filteredBooks = filter($books, function ($item) {
  return $item['author'] == 'George Orwell';
});

$heading = "Home Page";


require 'views/index.view.php';
?>

