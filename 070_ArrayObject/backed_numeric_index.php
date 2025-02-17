<?php

class T {}

$o = new T();

$a = new ArrayObject($o);
$a[3] = 'hello?';
var_dump($o);
var_dump($o->{3});
