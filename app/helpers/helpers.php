<?php

function dd(...$value): void
{
    echo '<pre>';

    var_dump($value);

    echo '</pre>';

    die();
}

function abort(int $code = 404): void
{
    http_response_code($code);

    require dirname(__FILE__, 3) . "/views/{$code}.view.php";

    die();
}

function urlIs($value): bool
{
    return $_SERVER['REQUEST_URI'] === $value;
}


function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        return abort(404);
    }
}


function auth($condition)
{
    if (!$condition)
        abort(Responce::FORBIDDEN);
}
