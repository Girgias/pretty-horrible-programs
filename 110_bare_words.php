<?php

hell:
try {
    $str = PHP;
    $str .= has;
    $str .= barewords;
    $str .= kinda;
    echo $str;
} catch (\Error $e) {
    if (str_contains($e->getMessage(), 'Undefined constant')) {
        $constValue = substr($e->getMessage(), 20, -1);
        define($constValue, $constValue . ' ');
        goto hell;
    }
}
