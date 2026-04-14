<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>数当てゲーム</h1>
  <?php
  $user = (int) $_POST['user'];
  $com = mt_rand(1, 9);
  if ($user === $com) {
    echo "あたりです";
  } else if ($user > $com) {
    echo "大きすぎます";
  } else {
    echo "小さすぎます";
  }
  ?>
  <p><a href="index.php">もどる</a></p>
</body>
</html>