<?php

$op1 = STDIN;
$op2 = STDERR;

if ($op1 < $op2) {
    echo 'OP1 less than OP2', PHP_EOL;
} else {
    echo 'OP1 greater than OP2', PHP_EOL;
}
