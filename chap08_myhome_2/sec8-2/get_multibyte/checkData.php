<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <div>
    <?php
      $data = $_GET['data'];
      $data = rawurldecode($data);
      $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
      echo "「{$data}」を受取りました。";
    ?>
  </div>  
</body>
</html>