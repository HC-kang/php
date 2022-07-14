<?php

$messages = [
    "hello, world",
    "who are you",
    "bye"
];


// Insert
$messages[] = 'whoops';

// Select
$messages[3];

// Update
$messages[3] = "do you know?";

// delete
unset($messages[3]);

var_dump($messages);