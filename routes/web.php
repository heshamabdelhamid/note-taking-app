<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'        => 'app/Http/Controllers/IndexController.php',
    '/about'   => 'app/Http/Controllers/AboutController.php',
    '/contact' => 'app/Http/Controllers/ContactController.php',
    '/notes'   => 'app/Http/Controllers/NotesController.php',
    '/note'    => 'app/Http/Controllers/NoteController.php',
];

routeToController($uri, $routes);
