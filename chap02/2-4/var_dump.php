<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>var_dumpの出力</title>
</head>
<body>
  <pre>
  <?php
  $msg = "おはよう";
  $colors = array("red", "blue", "yellow");
  $now = new DateTime();
  $tokuten = 45;
  $isPass = ($tokuten > 80);
  $userName;
  var_dump($msg);
  var_dump($colors);
  var_dump($now);
  var_dump($tokuten);
  var_dump($isPass);
  var_dump($userName);
  ?>
  </pre>
</body>
</html>