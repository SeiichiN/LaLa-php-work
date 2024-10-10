<?php
function h($str) {
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$userid  = $_POST['userid'];
$password = $_POST['password'];
$userid = mb_convert_kana($userid, "as");  // 全->半
$userid = strtolower($userid);  // 小文字にする
$userid = trim($userid);      // \t\n を削除
$password = mb_convert_kana($password, "as");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p>ようこそ、<?php echo h($userid) ?>さん</p>
  <p>秘密のパスワード <?= h($password) ?></p>
  <p><a href="index.php">もどる</a></p>
</body>
</html>

