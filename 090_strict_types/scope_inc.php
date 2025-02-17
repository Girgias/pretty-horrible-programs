<?php

declare(strict_types=1);

function foo(int $i) {
    var_dump($i);
}
$fn = fn (int $i) => var_dump($i);

