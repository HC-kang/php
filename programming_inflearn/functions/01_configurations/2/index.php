<?php 

ini_set('zend.assertions', -1);

// Active
assert_options(ASSERT_ACTIVE, true);
// stop testing on failure
assert_options(ASSERT_BAIL, false);
// php trace
assert_options(ASSERT_WARNING, true);
// callback
assert_options(ASSERT_CALLBACK, 'assertFailure');

function assertFailure(... $args)
{
    var_dump($args);
}

assert(false, __LINE__);