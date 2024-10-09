<?php
function price($tanka, $kosu) {
  $souryo = 250;
  $ryoukin = $tanka * $kosu;
  if ($ryoukin < 5000) {
    $ryoukin += $souryo;
  }
  return $ryoukin;
}

$kingaku1 = price(2400, 2);
$kingaku2 = price(1200, 5);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  2400円を2個購入した場合の金額は
  <?= $kingaku1; ?>円
  <br>
  
  1200円を5個購入した場合の金額は
  <?= $kingaku2; ?>円

</body>
</html>