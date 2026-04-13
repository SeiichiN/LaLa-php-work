<?php
function triangle($teihen, $takasa) {
  return $teihen * $takasa / 2;
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
  $takasa = $_POST['takasa'];
  $teihen = $_POST['teihen'];
  $menseki = triangle($teihen, $takasa);
  echo "三角形の面積は{$menseki}cm<sup>2</sup>";
  ?>
  <a href="triangle_form.php">もどる</a>
</body>
</html>