<?php

namespace Core;

class Validator
{

    public static function string(string $value, $min = 1, $max = 1000): bool
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email($value): string
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
