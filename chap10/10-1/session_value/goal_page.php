<?php
session_start();
require_once("../../lib/util.php");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
    if (isset($_SESSION['coupon'])) {
      $coupon = $_SESSION['coupon'];  # ABC123
      $couponList = ['ABC123', 'XYZ999'];
      if (in_array($coupon, $couponList)) {
        echo es($coupon), "は、正しいクーポンコードです。";
      } else {
        echo es($coupon), "は、誤ったクーポンコードです。";
      }
    } else {
      echo "セッションエラーです。";
    }
    ?>
  </div>
</body>
</html>