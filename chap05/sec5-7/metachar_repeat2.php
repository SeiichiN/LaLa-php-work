<?php
$pattern = "/[a-z]{4,8}/u";  


var_dump(preg_match($pattern, "cycling")); # 1
var_dump(preg_match($pattern, "ｃｙｃｌｉｎｇ")); # 0
var_dump(preg_match($pattern, "marathon")); # 1
var_dump(preg_match($pattern, "ｍａｒａｔｈｏｎ")); # 0
var_dump(preg_match($pattern, "run")); # 0
var_dump(preg_match($pattern, "SURF")); # 0


