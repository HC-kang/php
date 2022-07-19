<?php 

// Add Slashes at Quotes.
$slashe = addslashes((("'")));
var_dump($slashe);
$slashe = stripslashes($slashe);
var_dump($slashe);


// Binary to Hex
$bytes = random_bytes(32);

$hex = bin2hex($bytes);
echo $bytes;
echo $hex;


// One way hash(Encryption)
// sha1, md5 not recommanded
$password = crypt('Hello, world', 'salt');
echo $password;


// Split, Join
$url = 'http://example.com';
$exp = explode('//', $url);
var_dump($exp);
var_dump(implode('//', $exp));


// HTML entities
$html = <<< 'HTML'
<html>
    <body>
        <h1>Hello, world</h1>
    </body>
</html>
HTML;

$encoded = htmlentities($html);
var_dump($encoded);

echo html_entity_decode($encoded);

$encoded = htmlspecialchars($html);
echo $encoded;

echo html_entity_decode($encoded);


// strip HTML Tags
echo strip_tags($html);


// nl2br
echo nl2br("Hello\n world");


// Char
echo ord('BA');
echo chr(65);

// Parse Query String
// $_GET = 'a=b&c=d';
$arr = [];
$qs = 'lang=php&addr=127.0.0.1';
parse_str($qs, $arr);

var_dump($arr);


// Number Format
echo number_format(123456789);
// echo money_format('%i', 123456789);


// Case
echo strtoupper('Hello, world');
echo strtolower("Hello, world");


// Remove Spaces
echo trim(' Hello, world ');


// Replace
echo strtr("Hello, world", [
    'Hello, world' => '안녕하세요',
]);