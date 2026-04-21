<?php
$result = setcookie("message", "", time()-3600);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>クッキー削除ページ</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
    if ($result) {
      echo "クッキーを削除しました", "<hr>";
      echo '<a href="check_cookie.php">クッキーを確認するページへ</a>';
    } else {
      echo '<span class="error">クッキーの削除でエラーがありましたｎ</span>', "<br>";
    }
    ?>
  </div>
</body>
</html>