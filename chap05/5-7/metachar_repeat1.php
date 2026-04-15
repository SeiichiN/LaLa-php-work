<?php
$pattern = "/\d{3}-\d{2}/u";
var_dump(preg_match($pattern, "123-45"));  #1
var_dump(preg_match($pattern, "090-88"));  #1
var_dump(preg_match($pattern, "11-222"));  #0
var_dump(preg_match($pattern, "abc-de"));  #0
