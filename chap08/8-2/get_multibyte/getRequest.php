<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
  <div>
  <?php
  $data = "東京";
  $data = urldecode($data);
  $url = "checkData.php";
  echo "<a href={$url}?data={$data}>", "送信する", "</a>";
  ?>
  </div>
</body>
</html>