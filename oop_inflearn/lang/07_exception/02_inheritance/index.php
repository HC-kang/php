<?php

// Exception extends
class MyException extends Exception
{
    public function __construct()
    {
        
    }
}

class MyError extends Error
{
    
}

try {
    throw new MyException('Hello, world');
} catch (MyException $e) {
    var_dump(MyException::class);
} catch (Exception $e) {
    var_dump(Exception::class);
}