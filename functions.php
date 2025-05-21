<?php

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
