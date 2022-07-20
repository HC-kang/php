<?php 

// Socket Client
$sock = stream_socket_client('tcp://127.0.0.1:8080', $errno, $errstr);


// Get data from Server
echo fread($sock, 1024);

// Send Data to server
fwrite($sock, 'Hello~~ from client');


// Close a client
fclose($sock);