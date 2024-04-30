<?php
require_once 'lib/util.php';
require_once 'lib/db_functions.php';
$result = findAll();
require_once 'common/header.php';
?>
<div class="main-content wrapper">
  <section>
    <h2>一覧</h2>
    <?php if (count($result) > 0) : ?>
      <?php require_once 'common/table.php'; ?>
    <?php endif; ?>
  </section>
  <?php require_once 'common/aside.php'; ?>
</div><!-- /.main-content -->

<?php require_once 'common/footer.php';
