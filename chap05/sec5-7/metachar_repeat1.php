<?php
$pattern = "/[0-9]{3}-[0-9]{2}/u";
var_dump(preg_match($pattern, "123-45")); echo PHP_EOL;
var_dump(preg_match($pattern, "090-88")); echo PHP_EOL;
var_dump(preg_match($pattern, "11-222")); echo PHP_EOL;
var_dump(preg_match($pattern, "abc-de")); echo PHP_EOL;
var_dump(preg_match($pattern, "1234567-45678")); echo PHP_EOL;
