<?php
# メールのチェック
# xxxxx@yyyy.zzz
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>メールのチェック</title>
</head>
<body>
  <h1>メールのチェック</h1>
  <?php
    $email = $_POST['email'];
    $pattern = "/.+@.+\..+/";
    if (preg_match($pattern, $email)) {
      echo "あなたのメールアドレスは";
      echo htmlspecialchars($email, ENT_QUOTES, "UTF-8");
      echo "ですね<br>", PHP_EOL;
    } else {
      echo "正しいメールアドレスを入力してください";
    }
  ?>
  <p><a href="mail_input.php">もどる</a></p>
</body>
</html>
