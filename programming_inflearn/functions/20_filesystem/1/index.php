<?php 

// from Path
// echo __FILE__;
basename(__FILE__);
echo getcwd();
chdir(realpath('.').'/functions/20_filesystem/1');
dirname(__FILE__, 2);

// to Absolute Path
echo realpath('.');


// Get path info
(pathinfo(__DIR__));


// Find Files
// Glob
var_dump(glob('./*.php'));

var_dump(fnmatch('*.php', 'index.php'));

// File(Directory) Control
copy('./index.php', './file_functions.php');
mkdir('./sessions');
unlink('./file_functions.php');
rmdir('./sessions');