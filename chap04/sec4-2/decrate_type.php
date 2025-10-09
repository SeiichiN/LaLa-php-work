<?php
function twice(int $var) {
  $var *= 2;
  return $var;
}

$num = 10.999999;
$result = twice($num);
echo "$num の２倍は $result" . PHP_EOL;

