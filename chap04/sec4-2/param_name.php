<?php
function fee($adult=0, $child=0){
  $adult_fee = 1000 * $adult;
  $child_fee = 600 * $child;
  $fee = $adult_fee + $child_fee;
  return $fee;
}

$total = fee(child:3);
echo "子供3 の料金:";
echo "$total 円" . PHP_EOL;

