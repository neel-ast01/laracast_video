<?php

require base_path('Validator.php');
// require('Validator.php');


$config = require base_path('config.php');
$db = new Database($config['database']);
$errors = [];

// $heading = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (empty($errors["body"])) {

    }

    if (!Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = ' A body of no more than 1,000 characters is required ';
    }

    if (empty($errors)) {
        $db->query('INSERT INTO notes(body,user_id) VALUES(:body,:user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $errors = [];

//     if (!isset($_POST['body']) || !Validator::string($_POST['body'], 1, 1000)) {
//         $errors['body'] = 'A body of 1 to 1000 characters is required';
//     }

//     if (empty($errors)) {
//         try {
//             $query = 'INSERT INTO notes(body,user_id) VALUES(:body,:user_id)';
//             $result = $db->query($query, [
//                 'body' => $_POST['body'],
//                 'user_id' => 1
//             ]);

//             if ($result) {
//                 echo "<script>alert('Data added successfully');</script>";
//             } else {
//                 echo "<script>alert('Failed to insert data');</script>";
//             }
//         } catch (PDOException $e) {
//             echo "<script>alert('Failed to insert data. Error: " . $e->getMessage() . "');</script>";
//         }
//     } else {
//         foreach ($errors as $error) {
//             echo "<script>alert('$error');</script>";
//         }
//     }
// }






// require "views/.view.php";

view('notes/create.view.php', [
    'heading' => "Create Notes",
    'error' => $errors
]);


