<?php
function twice(string|float $var) : float {
  $var *= 2;
  return $var;
}

$num1 = "1.9cm";
$num2 = 2.6;
$result1 = twice($num1);
$result2 = twice($num2);
echo "{$num1}の２倍は", $result1, PHP_EOL;
echo "{$num2}の２倍は", $result2;

