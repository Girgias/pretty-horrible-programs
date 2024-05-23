<?php

$o = new stdClass();
try {
    exit($o);
} catch (\Throwable $e) {
    echo $e::class, PHP_EOL, "I've escaped the exit";
}
