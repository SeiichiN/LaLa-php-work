<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>郵便番号チェック</title>
</head>
<body>
  <h1>郵便番号チェック</h1>
  <?php
    $zipcode = $_POST['zip'];
    $zipcode = mb_convert_kana($zipcode, "as");  # p157
    $zipcode = trim($zipcode);
    $pattern = "/^[0-9]{3}-?[0-9]{4}$/u";
    if (preg_match($pattern, $zipcode)) {
      echo "あなたの郵便番号は";
      echo htmlspecialchars($zipcode, ENT_QUOTES, "UTF-8");
      echo "ですね<br>" . PHP_EOL;
    } else {
      echo "正しい郵便番号ではありあせん";
    }
  ?>
  <p><a href="zipinput.php">もどる</a></p>
</body>
</html>