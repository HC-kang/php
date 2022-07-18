<?php

$context = 1;

switch ($context) {
    case 1:
        echo 'hello';
        break;
    case 2:
        echo 'hi';
        break;
    default:
        echo 'Bye';
}

switch ($context):
    case 1:
        echo '1';
        break;
    case 2:
        echo '2';
        break;
    default:
        echo 'default';
        break;
endswitch;