<?php 

// Output Control

ob_start();

echo "Hello, world";
// $message = ob_get_contents();

// ob_flush();

// ob_clean();

// var_dump($message);

// file_put_contents('php://stdout', 'Hello, world');

// ob_end_flush();

$message = ob_get_clean();
var_dump($message);
