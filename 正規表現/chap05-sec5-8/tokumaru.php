<?php
// $pattern = "/^[0-9]+$/m";
$pattern = "/^[0-9]+\z/m";

var_dump(preg_match($pattern, "123\n"));
var_dump(preg_match($pattern, "1234"));

$subject = <<< EEE
123
123456
EEE;

var_dump($subject);

var_dump(preg_match($pattern, $subject));


// 修正時刻: Thu 2024/10/10 18:04:03
