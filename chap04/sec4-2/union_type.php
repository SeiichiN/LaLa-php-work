<?php
function twice(string|float $var): float {
  $var *= 2;   
  return $var; 
}

$num1 = "1.9";
$num2 = 2.6;
// $num3 = "wahaha";
$result1 = twice($num1);
$result2 = twice($num2);
// $result3 = twice($num3);
echo "$num1 の２倍は $result1" . PHP_EOL;
echo "$num2 の２倍は $result2" . PHP_EOL;
// echo "$num3 の２倍は $result13" . PHP_EOL;
