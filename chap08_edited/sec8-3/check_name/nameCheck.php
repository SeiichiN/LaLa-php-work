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
      require_once "../../lib/util.php";
      check_enc($_POST);
    ?>
    <?php
      $isError = false;
      if (isset($_POST['name'])) {
        $name = trim($_POST['name']);
        if ($name === "") {
          $isError = true;
        }
      } else {
        $isError = true;
      }
    ?>
    <?php if ($isError) : ?>
      <span class="error">名前を入力してください</span>
      <form action="nameCheckForm.php" method="post">
        <input type="submit" value="もどる">
      </form>
    <?php else : ?>
      <span>
        こんにちは、<?php echo h($name); ?>さん。
      </span>
    <?php endif; ?>
  </div>
</body>
</html>