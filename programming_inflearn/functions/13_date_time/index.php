<?php 

// Timezone

// Set
date_default_timezone_set('Asia/Seoul');
// Get
date_default_timezone_get();


// Get time: Unix Timestamp
$t = time();
// Case 1: Localtime
(localtime($t, true));
// Case 2: getdate
(getdate($t));


// Timestamp format
// Case 1: strftime
strftime('%d/%m/%Y %H:%M:%S', $t);
// Case 2: date
date('d/M/Y/H:i:s', $t);


// Make a timestamp
$timestamp = mktime('1', '15', '30');
date('d/m/Y H:i:s', $timestamp);


// Parsing string time.
// echo strptime(strftime('%d/%m/%Y %H:%M:%S', $t), '%d/%m/%Y %H:%M:%S');

$timestamp = strtotime('+1 day');
date('d/m/Y/ H:i:s', $timestamp);


// Script time execution time check.
$stime = microtime(true);

sleep(1);

$etime = microtime(true);

echo $etime - $stime;