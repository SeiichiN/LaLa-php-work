<?php
$color = "yellow";
$price = 100;
switch ($color) {
  case "green":
    $price = 120;
    break;
  case "red":
    $price = 140;
}
echo "{$color}は{$price}円。";
