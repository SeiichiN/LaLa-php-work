<?php
require_once "../../lib/util.php";
check_enc($_POST);

$isError = false;
if (isset($_POST['name'])) {
  $name = trim($_POST['name']);
  if ($name === "") {
    $isError = true;
  }
} else {
  $isError = true;
}
require_once '../../common/header.php'; 
?>

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
