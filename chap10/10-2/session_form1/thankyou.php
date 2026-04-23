<?php
session_start();
require_once('../../lib/util.php');

$error = [];
if (!empty($_SESSION['name']) && !empty($_SESSION['kotoba'])) {
  $name = $_SESSION['name'];
  $kotoba = $_SESSION['kotoba'];
} else {
  $error[] = "セッションエラーです";
}
killSession();
?>

<?php 
function killSession() {
  $_SESSION = [];
  # echo session_name();
  if (isset($_COOKIE[session_name()])) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time()-36000, $params['path']);
  }
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>完了ページ</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php if (count($error) > 0) { ?>
      <span class="error"><?php echo implode("<br>", $error); ?></span><br>
      <a href="input.html">最初のページに戻る</a>
    <?php } else { ?>
      <span>
        次のように受け付けました。ありがとうございました。
      </span>
      <hr>
      <span>
        名前：<?php echo es($name); ?><br>
        好きな言葉：<?php echo es($kotoba); ?><br>
        <a href="input.html">最初のページに戻る</a>
      </span>
    <?php } ?>
  </div>
</body>
</html>