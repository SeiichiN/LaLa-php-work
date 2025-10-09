<?php
function twice(float $var): int {
  $var *= 2;    // 10.9 * 3 = 21.8
  return $var;  // ここで21になる
}

$num = 10.9;
$result = twice($num);
echo "$num の２倍は $result" . PHP_EOL;
