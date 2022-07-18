<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i;
}

$messages = [
    'Hello world',
    'Who are you',
    'bye'
];

for ($i = 0; $i < count($messages); $i++) {
    echo $messages[$i] . PHP_EOL;
}