<?php
$pattern = "/[A-F]-[1-9]-\w/u";
var_dump(preg_match($pattern, "A-5-5"));  #1
var_dump(preg_match($pattern, "F-9-c"));  #1
var_dump(preg_match($pattern, "G-17-10"));  #0
var_dump(preg_match($pattern, "a-2-9"));  #0
