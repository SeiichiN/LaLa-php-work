<?php
$hobby_name = [
  "cooking" => "料理",
  "camera" => "写真",
  "train" => "鉄道",
]
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>

<body>
  <h1>受け取り</h1>
  <?php
  $hobby = $_POST['hobby'];
  foreach ($hobby as $v) {
    echo $hobby_name[$v] . "<br>";
  }
  ?>
  <p><a href="index.php">もどる</a></p>
</body>

</html>