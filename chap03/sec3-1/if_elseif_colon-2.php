<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <?php
    $age = 18;
  ?>
  <?php if ($age <= 15) { ?>
    <p>15歳以下の料金は 500円です。</p>
  <?php } elseif ($age <= 19) { ?>
    <p>16歳から19歳は2,000円です。</p>
  <?php } else { ?>
    <p>20歳以上の大人は2,500円です。</p>
  <?php } ?>
</body>
</html>
