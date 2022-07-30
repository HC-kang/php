<?php

class A 
{
    private string $message = 'Hello, world';

    public string $message2 = 'Hi world';
    
    public function __construct(string $message)
    {
        $this->message = $message;
    }
}

class B 
{
    
}
// ReflectionClass

$refClassA = new ReflectionClass('\A');
// var_dump($refClass->getConstructor());
// var_dump($refClass->getProperties(ReflectionProperty::IS_PUBLIC));
// var_dump($refClass->getProperties(ReflectionProperty::IS_PRIVATE));

$refClassB = new ReflectionClass('\B');
// var_dump($refClassB->isSubclassOf('\A'));

// ReflectionProperty
$messageProperty = $refClassA->getProperty('message');
var_dump($messageProperty->getType()->getName());