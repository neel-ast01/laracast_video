<?php

$config = require base_path('config.php');
$db = new Database($config['database']);

// $heading = "";

$notes = $db->query('SELECT * FROM notes WHERE user_id = 1')->get();

// $notes = $db->query('SELECT * FROM notes WHERE user_id=1')->fetchAll();
// require "views/index.view.php";

view('notes/index.view.php', [
    'heading' => "My Notes",
    'notes' => $notes
]);

