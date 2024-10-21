<?php 
require_once '../../lib/util.php';
require_once 'zipCheck_util.php';
check_enc($_POST);
$errors = [];
$zip = get_zip($errors);
// 以下、画面表示
require_once '../../common/header.php'; 
if (count($errors) > 0) {
  print_error($errors);
} else {
  echo "郵便番号は", h($zip), "です。";
}
move_to("zipCheckForm.php", "戻る");
require_once '../../common/footer.php';
