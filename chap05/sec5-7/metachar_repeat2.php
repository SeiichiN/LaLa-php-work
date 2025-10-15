<?php
$pattern = "/[a-z]{4,8}/u";
var_dump(preg_match($pattern, "cycling")); echo PHP_EOL;
var_dump(preg_match($pattern, "marathon")); echo PHP_EOL;
var_dump(preg_match($pattern, "run")); echo PHP_EOL;
var_dump(preg_match($pattern, "SURF")); echo PHP_EOL;
var_dump(preg_match($pattern, "abcdefghijklmnopqrstuvwxyz")); echo PHP_EOL;
