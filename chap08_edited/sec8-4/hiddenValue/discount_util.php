<?php
function get_discount(&$errors) {
  $discount = '';
  if (isset($_POST['discount'])) {
    $discount = $_POST['discount'];
    if (!is_numeric($discount)) {
      $errors[] = "割引率の数値エラー";
    }
  } else {
    $errors[] = "割引率が未設定";
  }
  return $discount;
}

function get_tanka(&$errors) {
  $tanka = '';
  if (isset($_POST['tanka'])) {
    $tanka = $_POST['tanka'];
    if (!ctype_digit($tanka)) {
      $errors[] = "単価の数値エラー";
    }
  } else {
    $errors[] = "単価が未設定";
  }
  return $tanka;
}

function get_kosu(&$errors) {
  $kosu = '';
  if (isset($_POST['kosu'])) {
    $kosu = $_POST['kosu'];
    if (!ctype_digit($kosu)) {
      $errors[] = "個数は正の整数で入力してください";
    }
  } else {
    $errors[] = "個数が未設定";
  }
  return $kosu;
}
