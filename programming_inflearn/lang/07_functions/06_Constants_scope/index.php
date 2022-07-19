<?php

// const MESSAGE = 'hello';
define('MESSAGE', 'hello world');
function foo() {
    // define('MESSAGE', 'hello world');
    // const MESSAGE = 'hellow';
}

foo();
echo MESSAGE;

$foo = function () {
    return MESSAGE;
};

echo $foo();