<?php

function foo() {
    return 'Hello world';
}

echo foo();


function bar(bool $is) {
    if ($is) {
        return 'hello world';
    }
    return 'Bye';
}

echo bar(true);
echo bar(false);


function baz($arg) {
    return $arg;
}

echo baz('HHHHHi');;