<?php

function createUser($email, $password, $username)
{
    return execute('INSERT INTO users(email, password, username) VALUES(?, ?, ?)', $email, $password, $username);
}

function updateUser($email, $password, $username, $id)
{
    return execute('UPDATE users SET email = ?, password = ?, username = ? where id = ?', $email, $password, $username, $id);
}