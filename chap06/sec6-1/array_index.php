<?php
$colors = array("赤", "青", "黄色");
// print_r($colors);

// 配列のコピー(新しい配列ができる)
$a = $colors;
// print_r($a);

$b = &$colos; // 本体が同じ配列
// & -- 変数のメモリ内の場所（アドレス）
// $bと$colorsは同じ配列になる

$colors[1] = "緑";
print_r($colors);
print_r($a);  // 青のまま
print_r($b);  // 緑
