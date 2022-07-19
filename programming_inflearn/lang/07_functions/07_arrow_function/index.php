<?php

$message = 'hello, world';

function foo($callback) {
    echo $callback();
}

// foo(
//     function () use ($message) {
//         return $message;
//     }
// );

foo(fn() => $message);

$fn = function () {
    return 'Hello world';
};
$fn = fn() => 'Hello world';