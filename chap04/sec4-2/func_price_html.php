<?php
 #
 # 料金を計算する関数 price
 # 料金が5000以上だと、送料無料
 # それ以下だと、送料250。
 # 引数:
 #   $tanka -- 商品の単価
 #   $kosu  -- 個数
 # 戻り値:
 #   $ryoukin
 #
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
  <title>関数</title>
</head>
<body>
  <p>2400円を2個購入した場合の金額は
    <?php echo "$kingaku1 円"; ?>
  </p>
  <hr>
  
  <p>1200円を5個購入した場合の金額は
  <?php echo "$kingaku2 円"; ?>
  </p>
</body>
</html>
