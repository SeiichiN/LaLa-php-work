<?php
require_once '../../lib/util.php';
require_once 'discount_util.php';
check_enc($_POST);
$errors = [];
$discount = get_discount($errors);
$tanka = get_tanka($errors);
$kosu = get_kosu($errors);
// 画面表示
require_once '../../common/header.php';
if (count($errors) > 0) {
  print_error($errors);
} else {
  $price = $tanka * $kosu;
  $discount_price = floor($price * $discount);
  $off_price = $price - $discount_price;
  $off_per = (1 - $discount) * 100;
  $tanka_fmt = number_format($tanka);
  $discount_price_fmt = number_format($discount_price);
  $off_price_fmt = number_format($off_price);

  echo "単価：", h($tanka_fmt), "円、個数：", h($kosu), "個<br>";
  echo "金額：", h($discount_price_fmt), "円<br>";
  echo "（割引：－", h($off_price_fmt), "円、", h($off_per), "% OFF）<br>";
}
move_to('discountForm.php', '戻る');
require_once '../../common/footer.php';
