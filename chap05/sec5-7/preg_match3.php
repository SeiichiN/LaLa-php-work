<?php
$result1 = preg_match("/4[6-9]-49/u", "確か49-46でした。");
$result2 = preg_match("/4[6-9]-49/u", "たぶん46-49だった。");
$result3 = preg_match("/4[6-9]-49/u", "41-49かな？");

var_dump($result1);  // 0
var_dump($result2);  // 1
var_dump($result3);  // 0
