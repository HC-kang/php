<?php 

// Socket Server
$server = stream_socket_server('tcp://127.0.0.1:8080', $errno, $errstr);


// Listening
while ($sock = stream_socket_accept($server)) {
    stream_socket_get_name($sock, false);

    // Send Data to client
    fwrite($sock, 'Hello!! from server', 1024);

    // Get Data from client
    echo stream_get_contents($sock);

    fclose($sock);
}


// Close socket server
fclose($server);