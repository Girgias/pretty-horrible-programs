<?php

$v = 25;
$has_null = null;

echo "v\n";
var_dump(isset($v));
var_dump(array_key_exists('v', $GLOBALS));
echo "has_null\n";
var_dump(isset($has_null));
var_dump(array_key_exists('has_null', $GLOBALS));
echo "undef\n";
var_dump(isset($undef));
var_dump(array_key_exists('undef', $GLOBALS));
