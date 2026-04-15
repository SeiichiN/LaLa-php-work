<?php
$pattern = "/田中..子/u";
var_dump(preg_match($pattern, "あ田中佐知子え"));  #1
var_dump(preg_match($pattern, "大田中亜希子様"));  #1
var_dump(preg_match($pattern, "ワ田中幸子え"));  #0
var_dump(preg_match($pattern, "田中向日葵子"));  #0
var_dump(preg_match($pattern, "田中子"));  #0
