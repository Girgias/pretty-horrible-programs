<?php

class T {
    public $p = 'eh';
}

$o = new T();

$a = new ArrayObject($o);
$a['huh'] = 'hello?';
var_dump($o);
