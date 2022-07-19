<?php

function foo(string $name) {
    echo 'hello!!'.$name;
}

foo('ford');

function bar($name = 'Ford') {
    echo "hi " . $name;
}

bar();

function baz(... $args){
    var_dump ($args);
}

baz('hi', 'hello', 'hey');

function qux($arg1, $arg2, $arg3){
    var_dump ($arg1, $arg2, $arg3);
}

$args = [
    'one', 'two', 'three'
];

qux(... $args);