<?php
require_once '../../lib/util.php';
require_once 'warikan_util.php';

check_enc($_POST);             // 文字エンコードチェック
$errors = [];
$goukei = get_gokei($errors);  // 入力値チェック
$ninzu = get_ninzu($errors);   // 入力値チェック
?>
<!-- ここから画面表示 -->
<?php require_once '../../common/header.php'; ?>

<?php
if (count($errors) > 0) {
  print_error($errors);
  move_to('warikanForm.php', '戻る');
} else {
  $amari = $goukei % $ninzu;
  $price = ($goukei - $amari) / $ninzu;
  $goukei_fmt = number_format($goukei);
  $price_fmt = number_format($price);
  
  $gouke_fmt = h($goukei_fmt);
  $ninzu = h($ninzu);
  $price_fmt = h($price_fmt);
  $amari = h($amari);
  echo "{$goukei_fmt}円を{$ninzu}人で割り勘します。<br>";
  echo "1人当たり{$price_fmt}円を支払えば、不足分は{$amari}円です。";
}
?>
<?php require_once '../../common/footer.php';
