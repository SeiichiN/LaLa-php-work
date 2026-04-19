<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
    require_once('../../lib/util.php');
    if (cken($_POST) === false) {
      $err = "Encoding Error! The expected encoding is UTF-8";
      exit($err);  // 処理中止
      // or 最初のファイルにリダイレクト
    }
    $_POST = es($_POST);
    ?>
    <?php
    $isError = false;
    if (isset($_POST['name'])) {
      $name = trim($_POST['name']);
      if ($name === '') {
        $isError = true;
      }
    } else {
      $isError = true;
    }
    ?>
    <?php if ($isError): ?>
      <span class="error">名前を入力してください</span>
      <form method="post" action="nameCheckForm.php">
        <input type="submit" value="戻る">
      </form>
    <?php else: ?>
      <span>
        こんにちは、<?php echo $name; ?>さん。
      </span>
    <?php endif; ?>
  </div>
</body>
</html>