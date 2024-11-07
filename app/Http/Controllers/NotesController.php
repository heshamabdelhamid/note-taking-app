<?php

$heading = 'My notes Us';

$config = require 'config/database.php';

// dd($config['databases']);

$db = new Database($config['databases']);

$notes = $db->query("SELECT * FROM notes where user_id = 1")->fetchAll();

require dirname(__FILE__, 4) . "/views/notes.view.php";
