<?php
$meat = "チキン南蛮香味だれ";
$fish = "鯖の竜田揚げ";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>本日のランチ</title>
  <link href="./css/style.css" rel="stylesheet">
</head>


<body>
  <div class="main-contents">
    本日のランチ、肉料理は、
    <h1>
      <?= $meat; ?>
    </h1>
    魚料理は、<?php echo __DIR__; ?>
    <h1>
      <?= $fish; ?>
    </h1>
    です。<br>
  </div>
</body>


</html>