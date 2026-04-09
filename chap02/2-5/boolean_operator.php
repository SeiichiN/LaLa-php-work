<?php
$test1 = TRUE;
$test2 = FALSE;
$hantei1 = $test1 && $test2;
$hantei2 = $test1 || $test2;
$hantei3 = !$test1;
var_dump($hantei1);  // false
var_dump($hantei2);  // true
var_dump($hantei3);  // false
