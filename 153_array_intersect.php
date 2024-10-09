<?php

$a1 = [
    new stdClass(),
];
$a2 = [
    new GMP,
];

print_r(array_intersect($a1, $a2));
