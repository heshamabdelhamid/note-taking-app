<?php

$heading = 'My notes Us';

$config = require 'config/database.php';

$db = new Database($config['databases']);

$notes = $db->query("SELECT * FROM notes where user_id = 1")->all();

require __DIR__ . '/../../../../views/notes/index.view.php';
