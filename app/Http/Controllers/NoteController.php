<?php

$heading = 'My notes Us';

$config = require 'config/database.php';

$currentUserId = 1;

$db = new Database($config['databases']);

// you can write key id in array params like this ['id' => $_GET['id']] or this [':id' => $_GET['id']]
$note = $db->query("SELECT * FROM notes where id = :id", [
    'id' => $_GET['id']
])->findOrfail();

auth($note['user_id'] === $currentUserId);

require dirname(__FILE__, 4) . "/views/note.view.php";
