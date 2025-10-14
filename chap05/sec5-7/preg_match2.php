<?php
$result1 = preg_match("/4.-49/u", "確か49-46でした");
$result2 = preg_match("/4.-49/u", "たぶん4あ-49だった");
$result3 = preg_match("/4.-49/u", "43-49かな？");
var_dump($result1);
var_dump($result2);
var_dump($result3);
