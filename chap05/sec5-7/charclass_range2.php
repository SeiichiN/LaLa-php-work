<?php
$pattern = "/[A-F]-\d-[\d\w]/u";
// $pattern = "/[A-F]-[0-9]-[0-9a-zA-Z]/u";
var_dump(preg_match($pattern, "A-5-5")); # 1
var_dump(preg_match($pattern, "F-9-c")); # 1
var_dump(preg_match($pattern, "G-17-10")); # 0
var_dump(preg_match($pattern, "a-2-9")); # 0
var_dump(preg_match($pattern, "A-５-Ｅ")); # 1
