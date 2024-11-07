<?php

$heading = 'My notes Us';

$config = require 'config/database.php';

$db = new Database($config['databases']);

// you can write key id like this 'id' or this ':id'
$note = $db->query("SELECT * FROM notes where id = :id ", ['id' => $_GET['id']])->fetch();

if (!$note)
    abort(404);

if ($note['user_id'] !== 1)
    abort(403);

require dirname(__FILE__, 4) . "/views/note.view.php";
