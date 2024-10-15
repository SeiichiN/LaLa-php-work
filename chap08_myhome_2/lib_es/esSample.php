<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <div>
    <pre>
      <?php
        require_once("lib/util.php");
        $myCode = "<h2>テスト1</h2>";
        $myArray = [
          'a' => '<p>赤</p>',
          'b' => '<script>alert("hello")</script>',
        ];
        echo '$myCodeの値：', h($myCode);
        echo PHP_EOL . PHP_EOL;
        echo '$myArrayの値：';
        foreach($myArray as $k => $v) {
          echo h($k), '=>', h($v), PHP_EOL;
        } 
      ?>
    </pre>
  </div>
</body>

</html>