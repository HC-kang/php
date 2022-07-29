<?php

// Visibility
class A
{
    public $public = 'public';

    protected $protected = 'protected';

    private $private = 'private';

    public function __construct()
    {
        
    }
}

$a = new A();

var_dump($a->public);
// var_dump($a->protected);
// var_dump($a->private);

class B extends A
{
    public function foo()
    {
        return $this->protected;
        // return $this->private;
    }

    private $message = 'Hello private';

    private static $instance;

    private function __construct()
    {
        parent::__construct();
        var_dump($this->message);
    }

    public static function getInstance()
    {
        // return new self();
        return self::$instance ?? self::$instance = new self();
    }
}

// $b = new B();
// var_dump($b->foo());

// $b = B::getInstance();

// $b = new B();

$b = B::getInstance();
$bb = B::getInstance();
var_dump($b===$bb);