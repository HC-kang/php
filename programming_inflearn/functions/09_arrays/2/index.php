<?php 

// Sort by value
$numbers = range(1, 5);

// sort($numbers);
rsort($numbers);
var_dump($numbers);

// Assoc sort by value
$arr = [
    'r' => 'Bye',
    'c' => 'Who are you?',
    'a' => 'Hello, world'
];

// asort($arr);
arsort($arr);
var_dump($arr);


// Sort by key
ksort($arr);
krsort($arr);
var_dump($arr);


// Sort by callback
usort($numbers, function ($a, $b) {
    return $a > $b;
});
uasort($numbers, function ($a, $b) {
    return $a > $b;
});
var_dump($numbers);