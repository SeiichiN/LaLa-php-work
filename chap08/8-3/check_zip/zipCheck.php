<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>フォーム入力チェック</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    <?php
    require_once('../../lib/util.php');
    // エンコードチェック
    if (cken($_POST) === false) {
      $err = "Encoding Error! The expected encoding is UTF-8";
      exit($err);  
    }
    $_POST = es($_POST);
    ?>

    <?php
    $errors = [];
    if (isset($_POST['zip'])) {
      $zip = trim($_POST['zip']);
      $pattern = "/^[0-9]{3}-[0-9]{4}$/";
      if (!preg_match($pattern, $zip)) {
        $errors[] = "郵便番号を正しく入力してください";
      }
    } else {
      $errors[] = "zipCheckForm.phpから入力してください";
    }
    ?>

    <?php
    if (count($errors) > 0) {
      echo '<ol class="error">'; 
      foreach ($errors as $value) {
        echo "<li>", $value, "</li>";
      }
      echo '</ol>';
    } else {
      echo "郵便番号は{$zip}です。";
    }
    ?>

    <form action="zipCheckForm.php" method="post">
      <input type="submit" value="もどる">
    </form>
  </div>
</body>
</html>