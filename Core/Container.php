<?php

namespace Core;

use Exception;

class Container
{
    protected $bindings = [];

    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }


    public function resolve($key)
    {
        if (!isset($this->bindings[$key])) {
            throw new Exception("No binding found for {$key}");
        }

        $resolver = $this->bindings[$key];

        if (is_callable($resolver)) {
            return call_user_func($resolver);
        }
    }
}
