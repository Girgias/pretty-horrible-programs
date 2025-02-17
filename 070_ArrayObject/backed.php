<?php

class T {
    public $p1;
    public int $p2;
    public readonly int $p3;

}

$o = new T();

$a = new ArrayObject($o);
$a['p1'] = 'hello';
var_dump($o);
var_dump($o->p1);
