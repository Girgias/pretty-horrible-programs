<?php

ini_set('session.use_only_cookies', 0);
session_start();
$sid1 = SID;
session_destroy();

session_start();
$sid2 = SID;
session_destroy();


echo "ID1: $sid1\nID2: $sid2\n";

