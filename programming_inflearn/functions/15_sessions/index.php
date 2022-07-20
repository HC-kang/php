<?php 

// Set Session save path
session_save_path('./sessions');


// Start a Session
session_start();


// Set Session value with Key
$_SESSION['mySession'] = 'Hello, world';
// echo $_SESSION['mySession'];


// Get Session id
session_id();


// Get Session name
session_name();


// Run GC(Garbage Collection)
// session_gc();


// Set/Get Session Cookie info
//Set
var_dump(session_set_cookie_params(1440));

//get
var_dump(session_get_cookie_params());


// Remove a Session value
unset($_SESSION['mySession']);


// Reset Session
// session_unset();


// Remove Session file
// session_destroy();


// Get session status;
var_dump(session_status());


// Commit
session_commit();


// Regenerate Session id
session_regenerate_id();