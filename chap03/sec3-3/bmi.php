<?php
$height = 170/100;
$weight = 47;
$bmi = $weight / ($height * $height);
$result = match(true) {
  $bmi < 18.5 => 'やせ型',
  $bmi < 24.5 => '普通',
  default => '肥満',
};
echo $result;
