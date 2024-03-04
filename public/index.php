<?php

const BASE_PATH = __DIR__ . '/../';



ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require BASE_PATH . 'Core/function.php';


spl_autoload_register(function ($class) {
 
  $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

  require base_path("{$class}.php");
});



require base_path('Core/router.php');
