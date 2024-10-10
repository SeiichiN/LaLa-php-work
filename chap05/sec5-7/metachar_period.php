<?php
$pattern = "/田中..子/u";

var_dump(preg_match($pattern, "田中佐知子")); # 1
var_dump(preg_match($pattern, "田中亜希子")); # 1
var_dump(preg_match($pattern, "田中幸子")); # 0
var_dump(preg_match($pattern, "田中向日葵子")); # 0

