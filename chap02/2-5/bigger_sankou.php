<?php
$a = mt_rand(0, 50);
$b = mt_rand(0, 50);
$bigger = ($a > $b) ? $a : $b;
echo "大きな値は{$bigger}、\$aは{$a}、\$bは{$b}";
// 大きな値は40、$aは26、$bは40
if ($a > $b) {
  $bigger = $a;
} else {
  $bigger = $b;
}