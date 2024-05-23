<?php

$obj = simplexml_load_string('<root/>');

if ($obj) {
    echo 'I am truthy!', PHP_EOL;
} else {
    echo 'I am falsy!', PHP_EOL;
}
