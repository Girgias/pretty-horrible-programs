<?php

class T {
    public function __construct(readonly int $p) {}
}

$o = new T(10);

$a = new ArrayObject($o);
$a['p'] = 45;

var_dump($o->p);
