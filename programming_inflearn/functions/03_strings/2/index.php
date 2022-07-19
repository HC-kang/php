<?php 

// print formatted string
printf("%s", 'Hello world');
printf("%10d", '15');
printf("%10.2f", '15.1241');

$message = 'Hello, world';

printf("%s, %d", $message, 10);
printf("%s, %d", ...[$message, 10]);

vprintf("%s, %d", [$message, 10]);


// buffering
echo $buf = sprintf("%s", 'Hello, world');
echo vsprintf("%s, %d", ['Hello, world', 10]); 