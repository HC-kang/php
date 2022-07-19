<?php


// $message = 'Hello world';

// function foo()
// {
//     // global $message;
//     $message = $GLOBALS['message'];
//     $message = 'hi';
//     echo $message;
// }

// echo foo();
// echo $message;

function bar() {
    static $count = 0;
    return ++ $count;
}

echo bar();
echo bar();
// echo $count;

function baz($arg) {
    echo $arg;
    return function() use($arg) {
        return $arg;
    };
}

$func = baz('hello');
echo $func();