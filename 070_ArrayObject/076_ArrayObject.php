<?php

class T {
    public $p = 'eh';
}

$o = new T();

$a = new ArrayObject($o);
$a[3] = 'hello?';
var_dump($o);
var_dump($o->{3});
