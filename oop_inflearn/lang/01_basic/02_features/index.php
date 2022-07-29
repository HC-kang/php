<?php

// Properties and Methods
class A
{
    public $message = 'Hello, world';

    public function foo()
    {
        return $this->message;
    }
}

$a = new A();
var_dump($a->foo());


// Inherit
class B extends A
{

}

$b = new B();
var_dump($b->foo());

// in Functions
function foo(A $a)
{
    return $a->foo();
}

var_dump(foo($b));


// Context
class C extends A
{
    public function foo()
    {
        // return new self(); // C
        // return new static(); // D
        return new parent(); // A
    }
}

class D extends C
{

}

$d = new D();
var_dump($d->foo());

// Constants
class E
{
    const MESSAGE = 'Hello, world';

    public function getConstants()
    {
        return self::MESSAGE;
    }

    public function getClassName()
    {
        return __CLASS__;
    }
}
$e = new E();
var_dump($e->getConstants());
var_dump(E::MESSAGE);
var_dump($e->getClassName());


// instanceof
$d = new D();
var_dump($d instanceof C);
var_dump($d instanceof E);