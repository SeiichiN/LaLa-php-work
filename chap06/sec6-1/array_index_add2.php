<?php
$colors = array();
$colors[0] = "赤";
$colors[1] = "青";
$colors[5] = "黄";
$colors[] = "白";

$a = $colors;  // 配列の値のコピー
$a[1] = "緑";
print_r($a);
print_r($colors);

