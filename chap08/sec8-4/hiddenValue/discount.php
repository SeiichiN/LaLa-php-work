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