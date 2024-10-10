<?php
function mojisuu(string $str) {
	return mb_strlen($str);  // str_len($str)
}

$msg1 = "Hello World";
$msg2 = "Hello ワールド";
echo mojisuu($msg1);    // 11
echo PHP_EOL;
echo mojisuu($msg2);    // 18

