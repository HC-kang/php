<?php

# loaded
// var_dump(extension_loaded('mbstring'));
// var_dump(get_loaded_extensions());

# include path.
// set_include_path(__DIR__ . '/mylib');
// include 'helloworld.php';
// var_dump(get_include_path());
// ini_restore('include_path');

// var_dump(get_included_files());

// phpinfo();


// ini_set('session.gc_maxlifetime', 1440);
// ini_get('session.gc_maxlifetime');
// ini_get();

putenv('APP_ENV=' . 'production');
var_dump(getenv('APP_ENV'));

$_ENV['APP_ENV'] = 'development';

var_dump($_ENV['APP_ENV']);