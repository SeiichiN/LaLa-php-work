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
			$no = $_GET['no'];
			$nolist = [3, 5, 7, 8, 9];
			if (in_array($no, $nolist)) {
				echo "{$no}はありました。";
			} else {
			  echo "{$no}はありません。";
			}
    ?>
    <p><a href="checkNoForm.php">もどる</a></p>
  </div>
</body>
</html>