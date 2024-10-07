<?php
$colorNumber = 1;
switch ($colorNumber) {
  case "0":
    $colorName = "青";
    break;
  case "1":
  case "2":
    $colorName = "緑";
    break;
  default:
    $colorName = "白";
}
echo "{$colorNumber}番は{$colorName}色です。";
