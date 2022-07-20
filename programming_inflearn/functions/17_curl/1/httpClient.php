<?php 

// cURL Handling
// init
$ch = curl_init();

// Set
$queryString = http_build_query([
    'message' => 'Hello, world!!',
]);

curl_setopt($ch, CURLOPT_HTTPGET, true);
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8080/?' . $queryString);

// Execution
// curl_exec($ch);

// Reset
curl_reset($ch);


// Set Options (POST)
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, [
    'message' => 'Hello!! world'
]);
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8080');

// Execution
curl_exec($ch);


//
curl_close($ch);