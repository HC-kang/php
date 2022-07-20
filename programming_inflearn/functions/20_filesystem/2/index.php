<?php 

// File handling
// echo dirname(__DIR__, 3);
$path = dirname(__DIR__) . '/2/HelloWorld.txt';

$fh = fopen($path, 'r');


// File Reading
//Case 1: functions 
// -> String
file_get_contents($path);
// -> Array
(file($path));
// -> output stream
(readfile($path));

// -> output stream
fpassthru($fh);
//
fread($fh, filesize($path));

//Case 2: with Loop
while (($line = fgets($fh) && !feof($fh))) {
    var_dump($line);
}


// File pointer
//Set
fseek($fh, 0, SEEK_SET);

//Get
echo ftell($fh);

//is ended
(feof($fh));

//Reset
rewind($fh);


// File writing
$path = dirname(__DIR__) . '/2/HelloWorld.txt';
$fh = fopen($path, 'w');

//Case 1: file_put_contents
file_put_contents($path, 'Hello, world');

//Case 2: file handler
rewind($fh);

// -> output stream)
fwrite($fh, 'Hello, world');
// -> output stream(force)
fflush($fh);

fclose($fh);

// File Slice
$fh = fopen($path, 'r+');
ftruncate($fh, rand(1, filesize($path)));


// File handler
fclose($fh);