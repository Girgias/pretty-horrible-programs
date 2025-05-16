<?php

$op1 = new stdClass();
$op2 = new DOMDocument();

if ($op1 < $op2) {
    echo 'Left less than Right', PHP_EOL;
} else {
    echo 'Left greater than Right', PHP_EOL;
}
