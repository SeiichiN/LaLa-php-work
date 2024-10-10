<?php
$str = "い";
$pattern = "/^[あ]/";
var_dump(preg_match($pattern, $str));
