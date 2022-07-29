<?php

// Compare

use JetBrains\PhpStorm\ArrayShape;

$class1 = new stdClass();
// $class1->sayHello = 'Hello, world';
$class2 = new stdClass();
// $class2->sayHello = 'Hello, world';


// var_dump($class1 == $class2);
// var_dump($class1 === $class2);

// Copy
// $class3 = $class1 = <Object id>
// $class3 = $class1;
// // $class3 = 'who are you?';

// $class3->sayHello = 'Hello, world?!';
// var_dump($class1->sayHello);

// // ($class3, $class1) = <Object Id>
// $class3 =& $class1;
// $class3->sayHello = 'Hello, w';
// var_dump($class1->sayHello);


$class3 = clone $class1;
var_dump($class3 === $class1);

$array1 = new ArrayObject([1, 2, new ArrayObject([ 3, 4])]);

$array2 = clone $array1;

var_dump($array1[2] == $array2[2]);
var_dump($array1[2] === $array2[2]);


// Shallow copy vs Deep Copy

class MyArrayObject implements ArrayAccess, IteratorAggregate 
{
    private $container = [];

    public function __construct($array)
    {
        $this->container = $array;
    }

    public function getIterator()
    {
        return new ArrayIterator($this->container);
    }

    public function offsetSet($offset, $value) 
    {
        $this->container[$offset] = $value;
    }

    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) 
    {
        return $this->offsetExists($offset) ? $this->container[$offset] : null;
    }

    public function __clone()
    {
        array_walk($this->container, fn(&$value) => is_object($value) ? $value = clone $value : null);
    }
}


// Case 1. __clone
$myArrayObject1 = new MyArrayObject([ 1, 2, new ArrayObject([ 3, 4])]);
// var_dump($myArrayObject[0]);
$myArrayObject2 = clone $myArrayObject1;

var_dump($myArrayObject1[2] === $myArrayObject2[2]);


foreach ($myArrayObject1 as $key => $value) {
    var_dump($key, $value);
}


// Case 2. Serialize

$myArrayObject2 = unserialize(serialize($myArrayObject1));
var_dump($myArrayObject1[2] === $myArrayObject2[2]);