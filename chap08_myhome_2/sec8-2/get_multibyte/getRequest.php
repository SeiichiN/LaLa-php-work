<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div>
    <?php
      $data = "東京 大阪";
      $data = rawurlencode($data);
      $url = "checkData.php";
      echo "<a href={$url}?data={$data}>送信する</a>";
    ?>
  </div>  
</body>
</html>