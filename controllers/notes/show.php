<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);
$currentUserId = 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id = $_GET['id'];

    $note = $db->query("select * from notes where id = {$id}")->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    $db->query("delete from notes where id = {$id}");

    header('location: /notes');
    exit();
} else {



    $id = $_GET['id'];

    $note = $db->query("select * from notes where id = {$id}")->findOrFail();

    authorize($note['user_id'] === $currentUserId);

    view('notes/show.view.php', [
        'heading' => "Note",
        'note' => $note
    ]);
}
