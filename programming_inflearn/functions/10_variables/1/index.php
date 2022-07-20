<?php 

$message = 'Hello, world';
$message2;
// Type
// echo gettype($message);


// Set type(type casting)
settype($message, 'int');

// int
is_int($message);
// string
is_string($message);
// iterable
is_iterable([]);
is_array([]);


// Value Check
isset($message);
empty($message2);


// Contert To
// var_dump(boolval(0));
// var_dump(strval(10));



// Print
$arr = [
    'message' => 'Hello, world',
];

// for reading
// print_r($arr);
// for debug
// var_dump($arr);
// for Expression
// var_export($arr);



// Serialize
$serializedArray = serialize($arr);
$var = unserialize($serializedArray);

// var_dump($var);



// Free
// unset($var);
// var_dump($var);



// Get defined
get_defined_vars();
get_defined_constants();
get_defined_functions();



// Constants
const MESSAGE = 'Hello, world';
if (defined('MESSAGE')) {
    echo constant('MESSAGE');
}