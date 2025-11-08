<?php 


spl_autoload_register(function ($className) {
    $path = '../app/';
    $file = $path . 'controllers/' . $className . '.php';

    if (file_exists($file)) {
        require_once $file;
    } else {
        die("The file for class {$className} was not found at {$file}");
    }
});



require 'config.php';
require 'functions.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';