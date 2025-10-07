<?php
$test1 = true;
$test2 = false;
$hantei1 = ($test1 and $test2) ;
// false =   true and false
$hantei2 = ($test1 or $test2);
// true  =  true  or false

var_dump($hantei1);  // false
var_dump($hantei2);  // true

