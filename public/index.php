<?php

const BASE_PATH = __DIR__ . '/../';

// var_dump(BASE_PATH);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require BASE_PATH . 'function.php';


spl_autoload_register(function ($class) {
  require base_path("Core/" . $class . '.php');
});


// require base_path('Database.php');
// require base_path('Response.php');


require base_path('router.php');
