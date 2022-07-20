<?php 

// function foo(string $message) {}
// function foo(string $message, int $num) {}

function foo($arg1)
{
    // Get Param Number
    $argCount = func_num_args();
    switch ($argCount) {
        case 1:
            echo func_get_arg(0);
            break;
        default:
            var_dump(func_get_args());
    }
}

// Call
// call_user_func('foo', 'Hello, world', 10);
call_user_func('foo', 'Hello, world');


// Check function exists.
// var_dump(function_exists('foo'));



// Get Defined functions
// var_dump(get_defined_functions());


// Call function existing script
register_shutdown_function(function () {
    echo 'exit';
});
