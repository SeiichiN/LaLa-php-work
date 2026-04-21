<?php
require_once('../../lib/util.php');
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>クッキー確認ページ</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
  <div>
  <?php
  echo "クッキーを確認しました", "<br>";
  if (isset($_COOKIE['message'])) {
    $message = $_COOKIE['message'];
    echo "クッキーの値：", es($message), "<hr>";
    echo '<a href="delete_cookie.php">クッキーを削除する</a>';
  } else {
    echo "クッキーはありません", "<br>";
    echo '<a href="set_cookie.php">クッキーを設定する</a>';
  }
  ?>
  </div>
</body>
</html>