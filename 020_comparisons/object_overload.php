<?php

$op1 = new DateTimeImmutable('2024-04-16');
$op2 = new DateTimeImmutable('2024-05-24');

if ($op1 < $op2) {
    echo 'OP1 less than OP2', PHP_EOL;
} else {
    echo 'OP1 greater than OP2', PHP_EOL;
}
