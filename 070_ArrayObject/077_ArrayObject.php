<?php

class T {
    public int $p;
}

$o = new T();

$o->p = 10;

$a = new ArrayObject($o);
$a['p'] = 'hello';

var_dump($o);
