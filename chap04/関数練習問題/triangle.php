<?php
/*
関数 triangle()を使って、次のコードを書き換えてください。
----------------------------
関数名: triangle()
引数:   float型 $bottom
        float型 $height
戻り値: float型 
----------------------------
*/

function triangle(float $bottom, float $height) : float {
  return $bottom * $height / 2;
}


$bottom = 20;
$height = 40;
$area = triangle($bottom, $height);
echo "底辺{$bottom}cm、高さ{$height}cmの三角形の面積は";
echo "{$area}cm<sup>2</sup>。" . PHP_EOL;

// 修正時刻: Tue 2024/10/08 19:48:50
