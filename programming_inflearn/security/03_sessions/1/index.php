<?php

session_save_path(dirname(__DIR__) . '/sessions');
session_start();
// Cookie

// Javascript Injection
echo '<script>document.write(document.cookie)</script>';


// Https
// session.cookie_secure = 1