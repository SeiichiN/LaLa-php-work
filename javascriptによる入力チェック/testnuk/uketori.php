<?php
$userid  = $_POST['userid'];
$password = $_POST['password'];
$userid = mb_convert_kana($userid, "as");
$password = mb_convert_kana($password, "as");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>ようこそ、<?= $userid ?>さん</p>
  <p>秘密のパスワード <?= $password ?></p>
  <p><a href="index.php">もどる</a></p>
</body>
</html>

