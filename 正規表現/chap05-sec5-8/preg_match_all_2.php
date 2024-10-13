<?php
$pattern = "/\A201[2-5](AX|FX)\z/i";
$subject = "2011AX,2012Fx,2012AF,2013FX,2015ax,2016Fx";
$array = explode(',', $subject);
$result = preg_grep($pattern, $array);
print_r($result);

// 修正時刻: Sun 2024/10/13 20:47:21
