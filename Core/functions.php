<?php

use Core\Response;

function urlIs($path)
{
    // print $path in console
    return $_SERVER['REQUEST_URI'] === $path;
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }
}

function base_path($path)
{
    return BASE_PATH . $path;
}

function view($path, $attributes = [])
{
    extract($attributes);

    require base_path('views/' . $path);
}
