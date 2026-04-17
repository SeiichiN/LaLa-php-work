<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
  <div>
    <?php
    $tanka = $_POST['tanka'];
    $kosu = $_POST['kosu'];
    $price = $tanka * $kosu;
    $tanka = number_format($tanka);
    $price = number_format($price);
    echo "単価{$tanka}円 ✕ {$kosu}個 は {$price}円です。";
    ?>
    <p><a href="calcForm.php">もどる</a></p>
  </div>
</body>

</html>