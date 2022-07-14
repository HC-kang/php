<?php

$message1 = 'Hello world';
$message2 = 'Who ar you?';
$message3 = 'Bye';

$messages = [
    "hello world",
    "who are you",
    "bye",
];

$messages = array("hello world","who are you","bye");

$messages = [
    0           => 'Hello world',
    'message'   => 'who are you?',
    'bye'
];

// list($message) = $messages;
// var_dump($message);

// list(,,$message) = $messages;
// var_dump($message);

[,$message] = $messages;
var_dump($message);

['message' => $message] = $messages;
var_dump($message);
