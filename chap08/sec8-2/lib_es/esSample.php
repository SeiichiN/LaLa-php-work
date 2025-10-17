<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div>
    <pre>
<?php
      require_once('lib/util.php');
      $myCode = "<h1>テスト1</h1>";
      $myArray = [
        'a' => '<p>赤</p>',
        'b' => "<script>alert('hello')</script>",
      ];
      echo '$mycodeの値: ', h($myCode);
      echo PHP_EOL . PHP_EOL;
      echo '$myArrayの値: ';
      foreach ($myArray as $k => $v) {
        echo "<p>";
        echo h($v);
        echo "</p>";
      }
    ?>
    </pre>
  </div>
</body>
</html>