<?php
require_once 'lib/util.php';

check_enc($_POST);

$isError = false;
if (isset($_POST['name'])) {
  $name = validate_name($isError);
} else {
  $isError = true;
}


require 'common/header.php';
?>
<?php if ($isError): ?>
  <p class="error">名前が未入力です</p>
<?php else: ?>
  <p><?php echo h($name) ?>さん、こんにちは</p>
<?php endif; ?>
<p><a href="index.php">もどる</a></p>
<?php require 'common/footer.php';

// 修正時刻: Fri 2024/10/18 07:27:47
