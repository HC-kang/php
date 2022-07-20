<?php 

// Hard link
// link(__FILE__, './file_functions.php');

// Symbolic link
symlink(__FILE__, './sym_file_functions.php');

// -> string
echo readlink('./sym_file_functions.php');