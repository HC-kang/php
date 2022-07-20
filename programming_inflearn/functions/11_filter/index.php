<?php 

// Filter
// var_dump($message = filter_var('Hello, world', FILTER_SANITIZE_STRING));
// $message = filter_var('Hello@world.com', FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_EMAIL);

// echo $message = filter_var('Hello, world', FILTER_CALLBACK, [
//     'options' => function($value) {
//         return $value;
//     }
// ]);

// Fix
filter_Var('<html><head></head></html>', FILTER_SANITIZE_FULL_SPECIAL_CHARS);


// Has
// $_POST, $_GET, $COOKIE, $_SESSION, $_SERVER, $_REQUEST
filter_has_var(INPUT_SERVER, 'REMOTE_ADDR');


// Request
$_ENV['REMOTE_ADDR'] = '127.0.0.1';

// var_dump($_SERVER['REMOTE_ADDR']);
// var_dump(filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_VALIDATE_IP));

if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
    filter_var($_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP);
}