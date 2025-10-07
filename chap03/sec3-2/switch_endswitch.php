<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php
$color = "red";
?>
<?php switch($color): ?>
<?php case "grean": ?>
    緑色は120円です。<br>
    <?php break; ?>
  <?php case "red": ?>
    赤色は150円です。<br>
    <?php break; ?>
  <?php default: ?>
    その他の色は100円です。<br>
<?php endswitch; ?>  
</body>
</html>