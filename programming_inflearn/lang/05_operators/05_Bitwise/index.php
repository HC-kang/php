<?php

var_dump ($bin = 0b0101);

var_dump ($bin | 0b0100);
var_dump ($bin & 0b0100);
var_dump ($bin ^ 0b0100);
var_dump ($bin << 1);
var_dump ($bin >> 1);

var_dump (~$bin);