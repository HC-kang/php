<?php

// Static

class A
{
    public static $message = 'Hello, world';

    public static function foo()
    {
        // return $this->message;
        return self::$message;
    }
}

// var_dump(A::$message);
// var_dump(A::foo());

$classname = 'A';

$a = new $classname();
var_dump($a -> foo());
// var_dump($a -> message);