<?php

for ($i = 0; $i < 10; $i++) {
    for ($j=0; $j < 10; $j++) {
        break 2;
    }
    echo '1';
}
for ($i = 0; $i < 10; $i++) {
    for ($j=0; $j < 10; $j++) {
        continue 2;
    }
    echo '1';
}