<?php
session_start();
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>セッション開始ページ</title>
  <link rel="stylesheet" href="../../css/style.css">
</head>
<body>
  <div>
    このページから購入するとクーポン割引が適用されます。<br>
    <?php
    $_SESSION['coupon'] = "ABC123";
    ?>
    <a href="goal_page.php">次のページへ</a>
  </div>
</body>
</html>