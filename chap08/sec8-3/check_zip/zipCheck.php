<html>
<head>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div>
  <?php
  require_once("../lib/util.php");
  if (!cken($_POST)) {
    exit("Encoding Error! not UTF-8");
  }
  ?>
  <?php
  $errors = [];
  if (isset($_POST['zip'])) {
    $zip = trim($_POST['zip']);
    $pattern = "/^[0-9]{3}-[0-9]{4}$/";
    if (!preg_match($pattern, $zip)) {
      $errors[] = "郵便番号が不正です";
    }
  } else {
    $errors[] = "フォームから入力してください";
  }
  ?>
  <?php
  if (count($errors) > 0) {
    echo '<ol class="error">';
    foreach ($errors as $value) {
      echo '<li>', $value, '</li>';
    }
    echo '</ol>';
  } else {
    echo h("郵便番号は{$zip}です");
  }
  ?>
  <hr>
  <form action="zipCheckForm.php" method="post">
    <input type="submit" value="戻る">
  </form>
</div>
</body>
</html>

