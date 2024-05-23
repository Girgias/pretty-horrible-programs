<?php

$s = '0123456789';

$o = '3xdf';

if (isset($s[$o])) {
    echo "Offset exist\n";
} else {
    echo "Offset does not exist\n";
}
echo 'Value of offset: ', $s[$o], PHP_EOL;
