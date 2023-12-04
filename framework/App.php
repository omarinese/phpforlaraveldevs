<?php
namespace Framework;

use Exception;

class App {

    private static $container = [];
    public static function bind($key, $value)
    {
        static::$container[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$container)) {
            throw new Exception("No es troba {$key} en el contenidor");
        }
        return static::$container[$key];
    }
}
