<?php  # p204 配列のコピー
$colors = ["赤", "青", "黃"];
$a = $colors;     # 値のコピー
# print_r($a);
$a[0] = "緑";
print_r($a);      # 緑、青、黃
print_r($colors); # 赤、青、黃

