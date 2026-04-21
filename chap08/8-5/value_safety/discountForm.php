<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>割引購入ページ786789</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
    require_once('../../lib/util.php');
    if (!cken($_POST)) {
      $err = "Encoding Error! The expected encoding is UTF-8";
      exit($err);
    }
    $_POST = es($_POST);
    ?>
    <?php
    if (isset($_POST['kosu'])) {
      $kosu = $_POST['kosu'];
    } else {
      $kosu = '';
    }
    ?>
    <?php
    require_once("saleData.php");
    $couponCode = "ha45as";
    $goodsID = "ax102";
    $discount = getCouponRate($couponCode); # 0.8
    $tanka = getPrice($goodsID);  # 2900
    if (is_null($discount) || is_null($tanka)) {
      $err = '<div class="error">不正な操作がありました</div>';
      exit($err);
    }
    ?>
    <?php
    $off = (1 - $discount) * 100;
    if ($discount > 0) {
      echo "<h2>このページでのご購入は{$off}% OFFになります！</h2>";
    }
    $tanka_fmt = number_format($tanka);
    ?>

    <form action="discount.php" method="POST">
      <input type="hidden" name="couponCode" value="<?php echo $couponCode; ?>">
      <input type="hidden" name="goodsID" value="<?php echo $goodsID; ?>">
      <ul>
        <li><label>単価：<?php echo $tanka_fmt; ?>円</label></li>
        <li><label>個数：
          <input type="number" name="kosu" 
                 value="<?php echo $kosu; ?>"></label></li>
        <li><input type="submit" value="計算する"></li>
      </ul>
    </form>
  </div>
  
</body>
</html>