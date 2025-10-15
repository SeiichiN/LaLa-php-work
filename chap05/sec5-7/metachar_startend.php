<?php
$pattern = "/^山..子$/u";
var_dump(preg_match($pattern, "山田智子")); echo PHP_EOL;
var_dump(preg_match($pattern, "山本あさ子")); echo PHP_EOL;
var_dump(preg_match($pattern, "山崎貴美")); echo PHP_EOL;
