<?php

// Anonymous Class
class A
{
    public function foo()
    {
        return 'hello';
    }
}

class B
{
    public function create()
    {
        return new class extends A {};
    }
}

$b = new B();
var_dump($b -> create() -> foo());