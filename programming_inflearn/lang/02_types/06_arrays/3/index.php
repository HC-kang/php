<?php

$messages = [
    "hello world",
];

var_dump($messages);

$messages = [
    ...$messages,
    "one",
    "two",
];
var_dump($messages);