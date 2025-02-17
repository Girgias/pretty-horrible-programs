<?php

class T {
    public int $p;
}

$o = new T();

$a = new ArrayObject($o);
var_dump(isset($a['p']));
var_dump($a['p']);
