<?php
$age = 25;
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php if ($age<=15): ?>
    <p>15歳以下の料金は500円です。</p>
  <?php elseif ($age<=19): ?>
    <p>15歳から20歳は2,000円です。</p>
  <?php else: ?>
    <p>20歳以上の大人は2,500円です。</p>
  <?php endif; ?>

</body>
</html>