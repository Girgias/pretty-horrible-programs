<?php

class Str implements Stringable
{
    public function __toString(): string
    {
        return "\0";
    }
}

${5} = 'hello';

$o = new Str();
$$o = 'hum';

print_r($GLOBALS);

