<?php

class P {
    const FOO = "from P";
}

class C extends P {
    const FOO = "from C";
}

$o = new C();
var_dump($o::FOO);
