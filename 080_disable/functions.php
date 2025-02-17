<?php

// php -d disable_functions="strlen" 080_disable/functions.php
function strlen(string $str): int
{
    return 42;
}

var_dump(strlen('hello'));
