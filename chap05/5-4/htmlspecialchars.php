<?php
// $msg = "東京<->京都 'Eat & Run' ツアー";
// $msg = '<script>alert("ウィルス発見!")</script>'
$msg = '<textarea>ウイルスはいやだ</textarea>';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
<?php
echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
// echo $msg;
?>
</body>
</html>