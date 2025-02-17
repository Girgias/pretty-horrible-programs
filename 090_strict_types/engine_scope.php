<?php

declare(strict_types=1);

$a = ['1', '2', 3, 4, '5.0', '6.0'];
$is_even = fn (int $i): bool => (bool) ($i % 2 === 0);
var_dump(array_filter($a, $is_even));
