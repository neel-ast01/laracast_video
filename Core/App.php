<?php

namespace Core;

class App
{
    protected static $containter;

    public static function setContainer($containter)
    {
        static::$containter = $containter;
    }

    public static function container()
    {
        return static::$containter;
    }


    public static function bind($key, $resolver)
    {
        static::container()->bind($key, $resolver);
    }

    public static function resolve($key)
    {
        return static::container()->resolve($key);
    }
}
