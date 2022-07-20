<?php

// PHP.ini
// ini_set('display_errors', 'Off');

// echo $message;

// ---------------

// error_reporting(0);

// echo $message;

// ---------------

set_error_handler(function () {});

echo $message;