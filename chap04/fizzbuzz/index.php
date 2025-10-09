<?php
/**
 * 関数fizzbuzz
 * 引数に数字をとり、それが
 * 3の倍数なら "fizz"
 * 5の倍数なら "buzz"
 * 3と5の倍数（15の倍数）なら "fizzbuzz"
 * それ以外なら、その数字を返す
 * 引数：$number
 * 戻り値：$result
 */
function fizzbuzz($number) {
  if ($number % 15 === 0) {
    $result = "fizzbuzz";
  } else if ($number % 3 === 0) {
    $result = "fizz";
  } else if ($number % 5 === 0) {
    $result = "buzz";
  } else {
    $result = $number;
  }
  return $result;
}

// 1～30まで繰り返す
for ($i = 1; $i <= 30; $i++) {
  echo fizzbuzz($i), PHP_EOL;
}

$i = 1;
while($i <= 30) {
  echo fizzbuzz($i) . PHP_EOL;
  $i++;
}
