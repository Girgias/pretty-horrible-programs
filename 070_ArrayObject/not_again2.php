<?php

enum FuckMe: string
{
    case A = "value";
}

function curse(mixed &$val, $key)
{
    if ($key === "value") $val = 0xdeadbeef;
}

$test = FuckMe::A;
array_walk($test, curse(...));
var_dump(FuckMe::A);
