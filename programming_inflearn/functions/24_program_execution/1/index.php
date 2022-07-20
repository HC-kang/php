<?php 

// Command Execution
$output = [];

// -> String
// echo exec('ls', $output);

// -> full string
// echo shell_exec('ls');

// -> output stream
// system('ls');

// echo `ls`;

// -> output stream
// passthru('ls');

// var_dump($output);



// Escaping
// echo escapeshellarg('echo "Hello, world";');
// echo exec(escapeshellcmd('php --ini && php -r'));

escapeshellcmd('php -r');