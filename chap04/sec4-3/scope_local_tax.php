<?php
$tax = 0.1;

function taxPrice($tanka, $kosu) {
  global $tax;
  $ryoukin = $tanka * $kosu * (1+$tax);
  echo "{$ryoukin}円です。";
}

taxPrice(tanka:250, kosu:4);
echo "税込み" . $tax*100, "%";

