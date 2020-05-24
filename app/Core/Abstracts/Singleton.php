<?php


namespace App\Core\Abstracts;


use mysql_xdevapi\Statement;

abstract class Singleton
{
    protected static $running = false;

    protected static function start(callable $callback) {

        if(static::$running === false) {
            static::$running = true;
            $callback();
        }

    }
}