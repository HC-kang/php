<?php 

// Log Level

error_reporting(E_ALL & ~E_NOTICE);


// Send Error Log
// error_log('Hello world', 3, __DIR__ . '/logs/log.log');

// Backtrace
// function foo() {
//     // debug_print_backtrace();
//     var_dump(debug_backtrace());
// }

// foo();

// Ignore Errors
// function bar() {
//     asdfadf;
// }

// @ Operator
// @bar();

//Error handling
//set
set_error_handler(function ($errno, $errstr) {
    switch ($errstr) {
        case E_USER_ERROR:
            var_dump($errstr);
            break;
    }
});

//reset
// restore_error_handler();

trigger_error('Hello world', E_USER_ERROR);

