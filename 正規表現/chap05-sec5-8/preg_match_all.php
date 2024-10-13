<?php
$pattern = "/201[2-5](AX|FX)/i";
$subject = "2011AX,2012Fx,2012AF,2013FX,2015ax,2016Fx";
$result = preg_match_all($pattern, $subject, $matches);
print_r($matches);

// 修正時刻: Sun 2024/10/13 20:47:21
