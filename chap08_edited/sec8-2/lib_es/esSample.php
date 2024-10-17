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
    require_once('lib/util.php');
    $myCode = "<h2>テスト１</h2>";
    $myArray = [
      "a" => "<p>赤</p>",
      "b" => "<script>alert('hello')</script>"
    ];
    echo '$myCodeの値：', h($myCode);
    echo PHP_EOL . PHP_EOL;
    echo '$myArrayの値：';
    foreach ($myArray as $str) {
      echo h($str);
      echo "<br>";
    }
    ?>
  </div>
</body>

</html>