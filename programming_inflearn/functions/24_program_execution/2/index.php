<?php 

// One way process handling
$ph = popen('php ' . dirname(__DIR__, 3) . '/lang/01_basic_syntax/HelloWorld/index.php', 'w');

echo stream_get_contents($ph);

pclose($ph);

// Two way process handling
$ph = proc_open('php ./22_readline/index.php', [
    0 => ['pipe', 'r'], // Read
    1 => ['pipe', 'w'], // Write
    2 => ['file', __DIR__ . '/logs/log.log', 'a'] // Error
],
$pipes,
dirname(__DIR__,2)
);

[ $readStream, $writeStream, ] = $pipes;
fwrite($readStream, 'Hello, world');
fclose($readStream);

var_dump(stream_get_contents($writeStream));
fclose($writeStream);

// Terminate
proc_terminate($ph);
// Close process
proc_close($ph);