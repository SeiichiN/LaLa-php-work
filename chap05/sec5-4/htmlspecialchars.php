<?php
// $msg = "東京<->京都 'Eat & Run' ツアー";
$msg = $_POST['msg'];
?>
<html>
<body>
<?php
//  echo $msg;
echo htmlspecialchars($msg, ENT_QUOTES, 'UTF-8');
?>
<p><a href="index.php">もどる</a></p>
</body>
</html>
