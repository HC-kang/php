<?php

$conn = mysqli_connect(
    'localhost',
    'root',
    'root',
    'myapp_test'
);

$_POST = [
    // 'email' => 'weston0713@gmail.com',
    'email' => "' or 1='1",
    'password' => 'secret',
];

[ 'email' => $email, 'password' => $password] = $_POST;

// Case 1. Injection
// SELECT * FROM users WHERE email = '' or 1='1';
//                                     ^^^^^^^^
// $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}' LIMIT 1");



// Case 2. Prepare Statement
$stmt = mysqli_prepare($conn, 'SELECT * FROM users WHERE email = ? LIMIT 1');
mysqli_stmt_bind_param($stmt, 's', $email);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);



// SUCCESS??
if (mysqli_num_rows($result)) {
    echo 'Hello, world';
}