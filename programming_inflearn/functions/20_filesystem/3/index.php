<?php 

// Get File into from 
$path = dirname(__DIR__ . '/README.md');

//Case 1: from File handler
$fh = fopen($path, 'r');
(fstat($fh));

//Case 2: from File name
(stat($path));


// get File info Detail
// Size
filesize($path);
// modification time
filemtime($path);

// Check file type
var_dump(is_dir($path));