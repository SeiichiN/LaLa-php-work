<?php
function charge($rank, $days=1) {
  switch($rank) {
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

$kingaku1 = charge("B", 2);
$kingaku2 = charge("A");
echo "金額1は{$kingaku1}円" . "<br>" . PHP_EOL;
echo "金額2は{$kingaku2}円";