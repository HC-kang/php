<?php 

// Stream context
$context = stream_context_create();

stream_context_set_option($context, [
    'http' => [
        'method' => 'GET',
    ]
]);

file_get_contents('http://example.com', false, $context);


// Stream filter
(stream_get_filters());

$fh = fopen(dirname(__DIR__, 3) . '/README.md', 'r');

stream_filter_append($fh, 'string.toupper');

echo stream_get_contents($fh);


// Add
stream_filter_append($fh, 'string.toupper');

// Get
fread($fh, 2048);
stream_get_contents($fh);



// Stream Wrappers
// stream_get_wrappers('file:');
// stream_get_wrappers('http:');
// stream_get_wrappers('php://input');
// stream_get_wrappers('php://output');
stream_get_wrappers();

$fh = fopen('php://output', 'w');
fwrite($fh, 'Hello, world');

var_dump(file_put_contents('php://output', 'Hello, world!!!'));