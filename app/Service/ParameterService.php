<?php

namespace App\Service;


class ParameterService
{
    public static function get($params, $key, $default = null)
    {
        return array_key_exists($key, $params) ? $params[$key] : $default;
    }
}