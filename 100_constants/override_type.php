<?php

class P {
    const FOO = "from P";
}

class C extends P {
    const FOO = 42;
}

$o = new C();
var_dump($o::FOO);
