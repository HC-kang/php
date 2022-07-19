<?php

// $foo = function () {
//     echo 'Hello!!!';
// };

// echo $foo();


// function bar($callback) {
//     echo $callback();
// }

// bar(
//     function () {
//         return "it's callback function";
//     }
// );

// bar(
//     function () {
//         return "it's another callback";
//     }
// );

function baz() {
    return function () {
        return 'Hello world';
    };
}

$func = baz();
echo $func();