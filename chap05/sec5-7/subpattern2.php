<?php
$pattern = "/(090|080|070)(-?\d{4}){2}/u";  // uはダメ

var_dump(preg_match($pattern, "090-1234-5678")); # 1
var_dump(preg_match($pattern, "080-1234-5678")); # 1
var_dump(preg_match($pattern, "07012345678")); # 1
var_dump(preg_match($pattern, "12345678")); # 0
// var_dump(preg_match($pattern, "電話090-1234-5678（携帯）")); # 0

var_dump(preg_match($pattern, "090-１２３４-５６７８")); # 0
var_dump(preg_match($pattern, "080-１２３４-５６７８")); # 0

