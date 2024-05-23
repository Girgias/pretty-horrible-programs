<?php

class Foo {
    public $prop1 = false;

    public function __get($name) {
        return false;
    }
}

$foo = new Foo();
var_dump(isset($foo->prop1));
var_dump(isset($foo->prop2));
