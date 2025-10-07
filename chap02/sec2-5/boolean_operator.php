<?php
$test1 = true;
$test2 = false;
$hantei1 = $test1 && $test2;
// false =   true && false
$hantei2 = $test1 || $test2;
// true  =  true  || false
$hantei3 = !$test1;

var_dump($hantei1);  // false
var_dump($hantei2);  // true
var_dump($hantei3);  // false

