<?php

// Constructor, Destructor
class A
{
    public function __construct()
    {
        var_dump(__METHOD__);
    }

    public function __destruct()
    {
        var_dump(__METHOD__);
    }
}

$a = new A();
unset($a);
var_dump('Hello');


// Constructor Parameters
class B
{
    public $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function foo()
    {
        return ($this->message);
    }
}

$b = new B('Hello!! init!!');
var_dump($b -> foo());


// Inherit
class C extends A
{
    public function __construct()
    {
        parent::__construct();
    }

    public function __destruct()
    {
        parent::__destruct();
    }
}

$c = new C();