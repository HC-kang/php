<?php 

// Change a directory
chdir(__DIR__);


// Get current working directory
echo getcwd();


// Reading a directory
$files = scandir(__DIR__.'/../..');

var_dump($files);


// Directory handling
$dir = opendir(__dir__ . '/../..');
// Read
while ($name = readdir($dir)) {
    var_dump($name);
}
rewinddir($dir);

echo $name = readdir($dir);

closedir($dir);