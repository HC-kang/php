<?php

// Generator
function gen()
{
    yield 1;
    yield 2;
    yield 3;
}

$gen = gen();

// var_dump($gen->current());
// $gen->next();
// var_dump($gen->current());
// $gen->next();
// var_dump($gen->current());

// foreach ($gen as $numbers)
// {
//     var_dump($numbers);
// }

// function gen2()
// {
//     yield 1;
//     yield from gen();
//     yield 2;
// }

// foreach (gen2() as $number) {
//     var_dump($number);
// }

// function gen3()
// {
//     yield 'message1' => 'Hello, world1';
//     yield 'message2' => 'Hello, world2';
//     yield 'message3' => 'Hello, world3';
// }

// foreach (gen3() as $key => $value) {
//     var_dump($key, $value);
// }

// function gen4()
// {
//     $data = yield;
//     yield $data;
// }

// $gen4 = gen4();

// var_dump($gen4->current());
// var_dump($gen4->send('Hello, world'));
// var_dump($gen4->current());

function __range($start, $end, $step = 1)
{
    for ($i = 0; $i <= $end; $i += $step) {
        yield $i;
    }
}

$s = microtime(true);

// float(0.019715070724487)
// int(437672)
// foreach(__range(0, 100000) as $number) {}

// float(0.0029220581054688)
// int(4598392)
foreach (range(0, 100000) as $number) {}

var_dump(microtime(true) - $s, memory_get_peak_usage());