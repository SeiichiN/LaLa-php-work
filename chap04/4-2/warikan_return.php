<?php
function warikan($total, $ninzu) {
  if ($ninzu <= 0) {
    return;  // 関数の処理を終わる
  }
  $result = $total / $ninzu;
  echo "{$total}円を {$ninzu}人で分けると {$result}円";
  echo "<br>" . PHP_EOL;
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
$total = $_POST['total'];
$ninzu = $_POST['ninzu'];
warikan($total, $ninzu);
?>
</body>
</html>
