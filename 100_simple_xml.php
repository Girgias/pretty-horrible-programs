<?php

$obj = simplexml_load_string('<root><child></child></root>');
$child = $obj->child;
$child->rewind();
var_dump((bool) $child);
var_dump($child->current());
var_dump((bool) $child->current());
