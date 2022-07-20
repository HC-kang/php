<?php 

// Cookie
setcookie('myCookie', 'Hello, world');

// Get a Cookie
echo $_COOKIE['myCookie'];

// Remove a Cookie
setcookie('myCookie', '', time() - 3600);