<?php

$message = "Hello world"; // String
$userCount = 0; // Int
$pi = 3.14; // Double
$is_visited = false; // Boolean
$temp = null; // null

echo 'the message is $message';
echo "the message is $message";


// Here doc, Now doc
echo '<html><head></head></html>';
echo <<<HTML
<html>
    <head>
        <title>$message</title>
    </head>
</html>

HTML;
echo <<<'HTML'
<html>
    <head>
        <title>$message</title>
    </head>
</html>

HTML;

// Free

unset($message);

echo $message;