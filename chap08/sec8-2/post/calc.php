<?php
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <dir>
    <?php
      $tanka = $_POST['tanke'];
      $kosu = $_POST['kosu'];
      $price = $tanka * $kosu;
      $tankaTxt = number_format($tanka);
      $priceTxt = number_format($price);
      echo "単価{$tankaTxt}円 ✕ {$kosu}個 は {$priceTxt}円です。";
    ?>
    <p><a href="calcForm.php">もどる</a></p>
  </dir>
</body>
</html>