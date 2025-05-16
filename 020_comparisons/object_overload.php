<?php

$op1 = new DateTimeImmutable('2024-04-16');
$op2 = new DateTimeImmutable('2024-05-24');

if ($op1 < $op2) {
    echo 'Left less than Right', PHP_EOL;
} else {
    echo 'Left greater than Right', PHP_EOL;
}
