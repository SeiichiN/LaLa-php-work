<?php
function omikuji() {
  $n = mt_rand(0, 4);
  $result = match($n) {
    0 => "大吉",
    1 => "中吉",
    2 => "小吉",
    3 => "末吉",
    4 => "凶",
  };
  return $result;
}

function omikuji2() {
  $moji = ["大吉", "中吉", "小吉", "末吉", "凶"];
  $n = mt_rand(0, 4);
  return $moji[$n];
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>おみくじ</h1>
  <p>
  <?php
    $kekka = omikuji2();
    echo $kekka;
  ?>
  <form action="omikuji_start.php" method="post">
    <input type="submit" value="もどる">
  </form>
  </p>
</body>
</html>