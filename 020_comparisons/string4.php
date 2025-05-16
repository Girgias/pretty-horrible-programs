<?php

$op1 = '17.555abc';
$op2 = 17.555;

ini_set('precision', 14);
if ($op1 < $op2) {
    echo 'Left less than Right', PHP_EOL;
} else {
    echo 'Left greater than Right', PHP_EOL;
}
