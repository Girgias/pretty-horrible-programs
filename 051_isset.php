<?php

class Foo {
    public $prop1;
    public mixed $prop2;
}

$foo = new Foo();
var_dump(array_key_exists('prop1', get_object_vars($foo)));
var_dump(array_key_exists('prop2', get_object_vars($foo)));
