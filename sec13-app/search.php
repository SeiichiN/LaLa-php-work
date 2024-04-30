<?php
require_once 'lib/util.php';
require_once 'lib/db_functions.php';

$gobackURL = "index.php";

if (!cken($_POST)) {
  header("Location: {$gobackURL}");
  exit;
}

if (empty($_POST)) {
  header("Location: {$gobackURL}");
  exit;
} else if (!isset($_POST['name']) || $_POST['name'] === "") {
  header("Location: {$gobackURL}");
  exit;
}
$name = $_POST['name'];
// データベースの処理
$result = findByName($name);

require_once 'common/header.php';
?>
<div class="main-content wrapper">
  <section>
    <h2>一覧</h2>
    <?php if (count($result) > 0): ?>
      <?php require_once 'common/table.php'; ?>
    <?php else: ?>
      <p>名前に「<?php echo h($name); ?>」は見つかりませんでした。</p>
    <?php endif; ?>
    <hr>
    <p><a href="/">一覧へ</a></p>
  </section>
  <?php require_once 'common/aside.php'; ?>
</div><!-- /.main-content -->

<?php require_once 'common/footer.php';
