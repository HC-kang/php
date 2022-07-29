<?php

// Magic Methods: Methods
class A
{
    public function __call($name, $args) {
        var_dump($name, $args);
    }

    // public function foo()
    // {
    //     var_dump(__METHOD__);
    // }

    public static function __callStatic($name, $args)
    {
        var_dump($name, $args);
    }

    public function __invoke(...$args)
    {
        var_dump($args);
    }
}

$a = new A();

// $a->foo1('hi', 'jj');
// A::foo('callStatic');
// $a('Hello', 'hi');

// User::whereId();