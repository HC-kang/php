<?php 

// Http header
//set
header('X-Header: Hello, world');
//get
header_remove('X-Header');

header('Location');
header('Cache-Control');
header('HTTP/1.1 200 OK');



// HTTP Response Code
//Case 1: http_response_code
http_response_code(200);
//Case 2: header
header('HTTP/1.1 404 Not Found');