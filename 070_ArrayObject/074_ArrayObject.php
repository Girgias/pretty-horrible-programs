<?php

class T {
    public $p;
}

$o = new T();

$a = new ArrayObject($o);
$a['p'] = 'hello';
var_dump($o);
