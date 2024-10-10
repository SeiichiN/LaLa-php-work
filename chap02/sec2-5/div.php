<?php
$a = 10;
$b = 0;
try {
  $c = $a / $b;     // php8
  // $c = intdiv($a, $b);   // PHP7
  echo $c;
} catch(DivisionByZeroError $e) {
  echo 'ゼロでの割り算は無理';
  echo $e->getMessage();
}
echo "どうですか？";
