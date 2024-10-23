<?php
session_start();
require_once '../../lib/util.php';
require_once '../../common/header.php';

if (isset($_SESSION['coupon'])) {
  $coupon = $_SESSION['coupon'];
  $couponList = ['ABC123', 'XYZ999'];
  if (in_array($coupon, $couponList)) {
    echo h($coupon), "は、正しいクーポンコードです。";
  } else {
    echo h($coupon), "は、誤ったクーポンコードです。";
  }
} else {
  echo '<span class="error">セッションエラーです。</span>';
}

require_once '../../common/footer.php';