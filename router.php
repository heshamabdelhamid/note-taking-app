<?php

$routes = require './routes/web.php';

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);
