<?php
$pattern = "/(090|080|070)-{0,1}[0-9]{4}-{0,1}[0-9]{4}/";
var_dump(preg_match($pattern, "090-1234-5678")); echo PHP_EOL;
var_dump(preg_match($pattern, "080-1234-5678")); echo PHP_EOL;
var_dump(preg_match($pattern, "07012345678")); echo PHP_EOL;
var_dump(preg_match($pattern, "12345678")); echo PHP_EOL;
var_dump(preg_match($pattern, "01230901234567891234")); echo PHP_EOL;
