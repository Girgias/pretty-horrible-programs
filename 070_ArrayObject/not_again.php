<?php

class T {
    private readonly int $p;

    public function getP() {
        return $this->p;
    }

    public function setP(int $v) {
        $this->p = $v;
    }
}

$o = new T();
$o->setP(5);

function curse(mixed &$val, $key) {
    var_dump(str_replace("\0", '\0', $key));
    $val = 25;
}

var_dump($o->getP());
array_walk($o, curse(...));
var_dump($o->getP());
