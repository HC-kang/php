<?php 

function foo(A $a)
{
    return $a->foo();
}

// Class Abstraction
abstract class A
{
    protected $message = 'Hello, world';

    public function sayHello() 
    {
        $this->message;
    }

    abstract public function foo();
}

class B extends A
{
    public function foo()
    {
        return __CLASS__;
    }
}

$b = new B();
// var_dump($b->foo());

var_dump(foo($b));