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
      $myCode = "<h2>テスト1</h2>";
      $myArray = [
        "a"=>"<p>赤</p>", 
        "b"=>"<script>alert('hello')</script>"
      ];
      echo '$myCodeの値：', es($myCode);
      echo "<br>" . "<br>";
      echo '$myArrayの値：';
      // print_r(es($myArray));
      foreach ($myArray as $v) {
        echo es($v), "<br>";
      }
      ?>
    
  </div>
</body>
</html>