<?php
$a = 34.567;
$b = (int)$a;
var_dump($a);
var_dump($b);
$c = (string)$b;
var_dump($c);

echo gettype($c), PHP_EOL;
$d = "12";
$e = (int)$d;
var_dump($e);
