<?php

$s = '0123456789';

$o = new stdClass();

foreach ([[], new stdClass(), STDERR] as $o) {
    try {
        if (isset($s[$o])) {
            echo "Offset exist\n";
        } else {
            echo "Offset does not exist\n";
        }
    } catch (\Throwable $e) {
        echo $e::class, ': ', $e->getMessage(), "\n";
    }
    try {
        echo $s[$o] ?? 'default', "\n";
    } catch (\Throwable $e) {
        echo $e::class, ': ', $e->getMessage(), "\n";
    }
}
