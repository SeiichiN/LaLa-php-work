<?php
$name = '佐藤明';
$age = 28;
$sex = '男';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1>人物紹介</h1>
  <dl>
    <dt>名前</dt>
    <dd><?php echo $name ?></dd>
    <dt>年齢</dt>
    <dd><?php echo $age ?></dd>
    <dt>性別</dt>
    <dd><?php echo $sex ?></dd>
  </dl>  
</body>
</html>