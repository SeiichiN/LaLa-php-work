<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div>  

<?php
require_once('../lib/util.php');
if (!cken($_POST)) {
  exit("Encoding Errlr! Not UTF-8");
}
?>
<?php
$errors = [];
if (isset($_POST['discount'])) {
  $discount = $_POST['discount'];
  if (!is_numeric($discount)) {
    $errors[] = '割引率の数値エラー';
  }
} else {
  $errors[] = "フォームから入力してください";
}

if (isset($_POST['tanka'])) {
  $tanka = $_POST['tanka'];
  if (!ctype_digit($tanka)) {
    $errors[] = '単価の数値エラー';
  }
} else {
  $errors[] = "フォームから入力してください";
}
?>
<?php
if (isset($_POST['kosu'])) {
  $kosu = $_POST['kosu'];
  if (!ctype_digit($kosu) || $kosu <= 0) {
    $errors[] = '個数は1以上の整数で入力してください';
  }
} else {
  $errors[] = "フォームから入力してください";
}
?>
<?php
if (count($errors) > 0) {
  echo '<ol class="error">';
  foreach ($errors as $value) {
    echo "<li>{$value}</li>";
  }
  echo "</ol>";
} else {
  $price = $tanka * $kosu;
  $discount_price = floor($price * $discount);
  $off_price = $price - $discount_price;
  $off_per = (1 - $discount) * 100;
  $tanka_fmt = number_format($tanka);
  $discount_price_fmt = number_format($discount_price);
  $off_price_fmt = number_format($off_price);
  echo h("単価：{$tanka_fmt}円<br>"), h("個数：{$kosu}個"), "<br>";
  echo h("金額：{$discount_price_fmt}円"), "<br>";
  echo h("（割引：{$off_price_fmt}円、{$off_per}％ OFF"), "<br>";
}
?>
</div>
</body>
</html>
