<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>割り勘計算</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>

<body>
  <div>
    <?php
    require_once('../../lib/util.php');
    // 文字エンコードチェック
    if (!cken($_POST)) {
      $err = "Encoding Error! The expected encoding is UTF-8";
      exit($err);
    }
    // HTMLエスケープ
    $_POST = es($_POST);
    ?>
    <?php
    $errors = [];
    ?>
    <?php
    // 合計金額のチェック
    if (isset($_POST['goukei'])) {
      $goukei = $_POST['goukei'];
      if (!ctype_digit($goukei)) { # 整数であるかどうか
        $errors[] = "合計金額を整数で入力してください";
      }
    } else {
      $errors[] = "warikanFormからのデータではありません";
    }
    // 人数のチェック
    if (isset($_POST['ninzu'])) {
      $ninzu = $_POST['ninzu'];
      if (!ctype_digit($ninzu)) {
        $errors[] = "人数を整数で入力してください";
      } else if ($ninzu == 0) {
        $errors[] = "0人では割れません";
      }
    } else {
      $errors[] = "warikanFormからのデータではない";
    }
    ?>

    <?php
    if (count($errors) > 0) {
      echo '<ol class="error">';
      foreach ($errors as $value) {
        echo "<li>{$value}</li>";
      }
      echo '</ol>';
    ?>
    <?php  # エラーがなければ
    } else {
      $amari = $goukei % $ninzu;
      $price = ($goukei - $amari) / $ninzu;
      $goukei_fmt = number_format($goukei);
      $price_fmt = number_format($price);
      echo "{$goukei_fmt}円を {$ninzu}人で割り勘します。<br>";
      echo "１人あたり{$price_fmt}円を支払えば、不足分は {$amari}円です。";
    } ?><!-- if文のおわり -->
    
    <form method="post" action="warikanForm.php">
      <li><input type="submit" value="戻る"></li>
    </form>
  </div>
</body>

</html>