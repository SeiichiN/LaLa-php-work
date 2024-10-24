<?php
require_once '../../lib/util.php';
require_once '../../lib/db_functions.php';
check_enc($_POST);
$gobackURL = "searchForm.php";

if (empty($_POST)) {
  header("Location: {$gobackURL}");
  exit;
} else if (!isset($_POST['name']) || $_POST['name'] === '') {
  header("Location: {$gobackURL}");
  exit;
}

require_once '../../common/header.php';
$name = $_POST['name'];
$result = findByName($name);
?>
<?php if (count($result) > 0) : ?>
  <h3>名前に「<?= h($name) ?>」が含まれているレコード</h3>
  <?php disp_table($result); ?>
  <?php else : ?>
  <span class="error">エラーがありました</span><br>
<?php endif; ?>
<hr>
<p><a href="<?= $gobackURL ?>">もどる</a></p>
<?php 
require_once '../../common/footer.php';
