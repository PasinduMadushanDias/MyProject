<?php

use Core\App;
use Core\Database;

$db = App::resolve(Database::class);


$errors = [];

view('notes/create.view.php', [
    'errors' => $errors
]);
