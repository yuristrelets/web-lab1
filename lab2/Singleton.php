<?php

class Singleton
{
    private static $instances = [];

    protected function __construct() { }
    
    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {
        $className = static::class;
        echo "\n" . $className;
        
        if (!isset(self::$instances[$className])) {
            self::$instances[$className] = new static();
            echo " created";
        } else {
            echo " exists";
        }

        return self::$instances[$className];
    }
}