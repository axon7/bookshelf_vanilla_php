<?php

function urlIs($path)
{
    // print $path in console
    return $_SERVER['REQUEST_URI'] === $path;
}
