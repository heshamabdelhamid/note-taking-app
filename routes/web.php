<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/'        => 'app/Http/Controllers/index.php',
    '/about'   => 'app/Http/Controllers/about.php',
    '/contact' => 'app/Http/Controllers/contact.php',
    '/notes'   => 'app/Http/Controllers/notes.php',
    '/note'    => 'app/Http/Controllers/note.php',
];

routeToController($uri, $routes);
