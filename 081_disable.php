<?php

// php -d disable_functions="strlen" 081_disable.php
function strlen(string $str): int
{
    return 42;
}

var_dump(strlen('hello'));
