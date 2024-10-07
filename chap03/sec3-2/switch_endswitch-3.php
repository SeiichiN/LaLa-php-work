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
  ?>
      <p>緑色は120円です。</p>
  <?php
      break;
    case "red":
  ?>
      <p>赤色は150円です。</p>
  <?php
      break;
    default:
  ?>
      <p>その他の色は100円です。</p>
  <?php
  }
  ?>
</body>
</html>