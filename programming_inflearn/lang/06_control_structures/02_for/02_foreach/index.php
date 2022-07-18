<?php

$response = [
    // 'name' => 'PHP',
    // 'categoryId' => 0,
    'messages' => [
            'Hello world',
            'Who are you',
            'bye',
    ]
];

// foreach ($response as $key => $value) {
//     echo $value . PHP_EOL;
// }
foreach ($response as $key => $value) {
    foreach ($value as $msg) {
        echo $msg . PHP_EOL;
    }
}