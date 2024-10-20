<?php
require_once "../../lib/util.php";
require_once "varidate_name.php";

check_enc($_POST);

$isError = false;
$name = getName($isError);
?>
<?php require_once '../../common/header.php'; ?>
<?php if ($isError) : ?>
  <span class="error">名前を入力してください</span>
  <form action="nameCheckForm.php" method="post">
    <input type="submit" value="もどる">
  </form>
<?php else : ?>
  <span>
    こんにちは、<?php echo h($name); ?>さん。
  </span>
<?php endif; ?>
<?php require_once '../../common/footer.php';
