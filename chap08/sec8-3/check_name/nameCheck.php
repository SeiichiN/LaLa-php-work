<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div>
    <?php
    require_once('../lib/util.php');

    // 文字コードのチェック
    if (!cken($_POST)) {
      $err = "Encoding Error! The expected encofing is UTF-8";
      exit($err);
    }
    
		$isError = false;
    if (isset($_POST['name'])) {
      $name = trim($_POST['name']);
      if ($name === '') { $isError = true; }
    } else {
      $isError = true;
    }
    ?>
    
    <?php if ($isError): ?>
      <span class="error">名前を入力してください</span>
    <?php else: ?>
		  <span>こんにちは、<?php echo h($name); ?>さん。</span>
    <?php endif; ?>
    <hr>
    <form action="nameCheckForm.php" method="post">
      <input type="submit" value="もどる">
    </form>
  </div>
</body>
</html>
