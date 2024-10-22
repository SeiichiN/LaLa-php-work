<?php
session_start();
$_SESSION['coupon'] = 'ABC123';
// ここから画面表示
require_once '../../common/header.php';
?>
このページから購入するとクーポン割引が適用されます<br>
<a href="goal_page.php">次のページへ</a>
<?php
require_once '../../common/footer.php';
