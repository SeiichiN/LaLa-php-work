<?php
function fizzbuzz($num) {
  $result = match(true) {
    $num % 15 === 0 => "fizzbuzz",
    $num % 3 === 0 => "fizz",
    $num % 5 === 0 => "buzz",
    default => (string)$num,
  };
  return $result;
}

$num = 1;
while ($num <= 30) {
  echo fizzbuzz($num), "<br>", PHP_EOL;
  $num++;
}

// 修正時刻: Thu 2025/10/09 06:40:36
