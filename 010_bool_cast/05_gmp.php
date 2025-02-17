<?php

$obj = gmp_init(0);

if ($obj) {
    echo 'I am truthy!', PHP_EOL;
} else {
    echo 'I am falsy!', PHP_EOL;
}
