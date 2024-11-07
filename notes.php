<?php
#----------------------- SQL INJECTION NOTES ------------------------#

#------------------------These are two solutions to avoid sql injection------------------------------#

// argument second in query function for sql injection this ? it's means something
// $note = $db->query("SELECT * FROM notes where id =?", [$_GET['id']])->fetch();


/**
* This is a wrong because it is SQL injectable, please don't do this never
* $note = $db->query("SELECT * FROM notes where id = {$_GET['id']}")->fetch();
*/