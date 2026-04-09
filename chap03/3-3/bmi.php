<?php
$height = mt_rand(160, 180);
$weight = mt_rand(55, 80);
$height = $height / 100.0;
$bmi = $weight / ($height * $height);
$result = match(true) {
  $bmi < 18.5 => "やせ型",
  $bmi < 24.5 => "普通体型",
  default => "肥満",
};
echo $result;
