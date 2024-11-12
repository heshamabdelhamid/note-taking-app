<?php

$heading = "Create Note";

$config = require 'config/database.php';
$db     = new Database($config['databases']);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $result = require __DIR__ . '/../requests/CreateNoteRequest.php';

    $db->query('INSERT INTO notes(title,body,user_id) VALUES(:title,:body,:user_id)', [
        'title'   => $_POST['title'],
        'body'    => $_POST['body'],
        'user_id' => 1,
    ]);
}

require __DIR__ . '/../../../views/notes/create-note.view.php';
