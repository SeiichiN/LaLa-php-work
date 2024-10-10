<?php
$height = 170 / 100;
$weight = 80;
$bmi = $weight / ($height * $height);

$type = match(true) {
  $bmi < 18.5 => "やせ型",
  $bmi < 24.5 => "ふつう",
  default => "肥満",
};
echo $type;
