<?php

use Core\Container;
use Core\Database;
use Core\App;
use Core\Blade;

$container = new Container();

App::setContainer($container);

App::bind('Core\Database', function () {
    $config = require base_path('config.php');

    return new Database($config['database']);
});
