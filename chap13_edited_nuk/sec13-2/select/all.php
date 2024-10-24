<?php
require_once '../../lib/util.php';
require_once '../../lib/db_functions.php';
$result = findAll();
// ここから画面表示
require_once '../../common/header.php';
?>
<?php if ($result !== null) : ?>
  <?php disp_table(($result)); ?>
  <?php else : ?>
  <span class="error">データベース問い合わせエラー</span>
<?php endif; ?>
<?php
require_once '../../common/footer.php';
