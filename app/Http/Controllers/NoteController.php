<?php

$heading       = 'My notes Us';
$config        = require 'config/database.php';
$db            = new Database($config['databases']);
$currentUserId = 1;

// you can write key id in array params like this ['id' => $_GET['id']] or this [':id' => $_GET['id']]
$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id'],
])->findOrfail();

auth($note['user_id'] === $currentUserId);

require __DIR__ . '/../../../views/notes/show.view.php';
