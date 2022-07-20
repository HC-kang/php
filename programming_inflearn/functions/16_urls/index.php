<?php 

// base64 encode/decode
// echo $base64Encoded = base64_encode('Hello, world');
// echo PHP_EOL;
// echo base64_decode($base64Encoded);



// as Http client Get Headers
// var_dump(get_headers('http://example.com'));



// as Http client Get meta tags
// var_dump(get_meta_tags('http://example.com'));



// Build a query string
$queryString = http_build_query([
    'lang' => 'php',
    'message' => 'hello, world'
]);


// parse URL
// var_dump(parse_url('http://example.com?' . $queryString));



// URL Encode/Decode
//Encode
echo $urlEncoded = urlencode('안녕하세요');
//Decode
echo urldecode($urlEncoded);