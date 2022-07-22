<?php

require_once 'bootstrap/app.php';

$_SESSION['user'] = true; // user test
unset($_SESSION['user']);

?>

<?php require_once 'layouts/top.php'?>

<h1><?='Hello, world'?></h1>

<?php require_once 'layouts/bottom.php'?>