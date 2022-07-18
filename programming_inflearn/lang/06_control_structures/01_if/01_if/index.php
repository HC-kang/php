<?php

// [], '', false, 0, null -> false
if (false) {
    echo 'hello world';
} elseif (true) {
    echo '???';
} else {
    echo 'bye';
}


if ($message = 'Hello world') {
    echo $message;
}

if (false):
    echo "hi";
elseif (true):
    echo "hello";
else:
    echo "bye";
endif;