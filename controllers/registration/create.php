<?php

use Core\App;


$db = App::resolve('Core\Database');





view('registration/create.view.php', [
    'heading' => "Registration"
]);
