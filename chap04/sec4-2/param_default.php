<?php
function charge($rank, $days=1) {
  switch ($rank) {
    case "A":
      $ryoukin = 15000 * $days;
      break;
    case "B":
      $ryoukin = 12000 * $days;
      break;
    default:
      $ryoukin = 8000 * $days;
  }
  return $ryoukin;
}

function charge2($rank, $days=1) {
  $ryoukin = match($rank) {
    "A" => 15000 * $days,
    "B" => 12000 * $days,
    default => 8000 * $days,
  };
  return $ryoukin;
}

$kingaku1 = charge(2, "B");
$kingaku2 = charge(3);
echo "金額１は $kingaku1 円。<br>" . PHP_EOL;
echo "金額２は $kingaku2 円。<br>" . PHP_EOL;
