<?php

use Core\App;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

$errors = [];

if (!Validator::email($email)) {
    $errors['email'] = 'Email is not valid';
}

if (!Validator::string($password, 6, 255)) {
    $errors['password'] = 'Password must be at least 6 characters';
}

if (!empty($errors)) {
    view('registration/create.view.php', [
        'heading' => "Registration",
        'errors' => $errors,
        'email' => $email
    ]);
    exit();
}




$db = App::resolve('Core\Database');



$query = "SELECT * FROM users WHERE email = :email";
$foundUser = $db->query($query, ['email' => $email])->find();

if ($foundUser) {
    $errors['email'] = 'Email already exists';
    view('registration/create.view.php', [
        'heading' => "Registration",
        'errors' => $errors,
        'email' => $email
    ]);
    exit();
}

$query = "INSERT INTO users (email, password) VALUES (:email, :password)";
$db->query($query, [
    'email' => $email,
    'password' => $password
]);

$_SESSION['user'] = [
    'email' => $email
];



header('Location: /');
exit();
