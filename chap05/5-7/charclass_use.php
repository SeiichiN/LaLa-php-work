<?php
$pattern = "/[赤青緑]の玉/u";
var_dump(preg_match($pattern, "それは赤の玉です"));  #1
var_dump(preg_match($pattern, "青の玉が2個です"));  #1
var_dump(preg_match($pattern, "緑の玉でした"));  #1
var_dump(preg_match($pattern, "黃の玉でした"));  #0

