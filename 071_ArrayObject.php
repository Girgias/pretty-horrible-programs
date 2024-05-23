<?php

class Foo extends ArrayObject {
    public function append(mixed $value): void
    {
        echo "I'm overloaded!\n";
        parent::append($value);
    }
}

$a = new Foo();
$a[] = 25;
//$a->append(45);
var_dump($a);
