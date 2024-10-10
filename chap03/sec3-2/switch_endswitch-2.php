<?php $color = "red"; ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
  switch($color) {
    case "green":
      echo "<p>緑色は120円です。</p>";
      break;
    case "red":
      echo "<p>赤色は150円です。</p>";
      break;
    default:
      echo "<p>その他の色は100円です。</p>";
  }
  ?>
</body>
</html>