<?php

//declare(strict_types=1);

function foo(int $i) {
    var_dump($i);
}

function bar(string $s) {
    var_dump($s);
}

foo("10.0");
bar(gmp_init(25));

