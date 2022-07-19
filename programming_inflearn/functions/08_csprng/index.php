<?php 

// rand() vs random_int()
// echo rand(1, 5);
echo random_int(0, 1);

// Create a random bytes
$bytes = random_bytes(32);
echo $bytes;