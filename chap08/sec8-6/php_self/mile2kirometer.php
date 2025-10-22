<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div>
    <?php
    require_once('../lib/util.php');
    if (!cken($_POST)) {
      exit("Encoding Error! Not UTF-8");
    }
    ?>
    <?php
    $error = '';
    $mile = '';
    if (isset($_POST['mile'])) {
      $isNum = is_numeric($_POST['mile']);
      if ($isNum) {
        $mile = $_POST['mile'];
      } else {
        $error = '<span class="error">←数値を入力してください</span>';
      }
    } else {
      // このページを始めて開いたとき
      $isNum = false;
    }
    ?>
    <form action="<?php echo h($_SERVER['PHP_SELF']) ?>" method="post">
      <ul>
        <li>
          <label>マイルをKMに換算：
            <input type="text" name="mile" 
                  value="<?php echo $mile ?>">
          </label>
          <?php echo $error ?>
        </li>
        <li><input type="submit" value="計算する"></li>
      </ul>
    </form>
    <?php
    if ($isNum) {
      echo '<hr>';
      $kirometer = $mile * 1.60934;
      echo h("{$mile}マイルは{$kirometer}kmです。");
    }
    ?>
  </div>
</body>
</html>