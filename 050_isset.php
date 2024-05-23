<?php

class Foo {
    public $prop1;
    public mixed $prop2;
}

$foo = new Foo();
var_dump(isset($foo->prop1));
var_dump(isset($foo->prop2));
var_dump($foo->prop1);
var_dump($foo->prop2);
