<?php 

// JSON
// encode
$jsonEncoded = json_encode([
    'message' => 'Hello, world'
]);

// decode
var_dump(json_decode($jsonEncoded, true));
