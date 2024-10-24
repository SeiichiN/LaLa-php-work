<?php
require_once '../../lib/util.php';
require_once '../../lib/db_functions.php';
$gobackURL = 'insertForm.php';
check_enc($_POST);
$errors = [];
if (!isset($_POST['name']) || $_POST['name'] === '') {
  $errors[] = "名前が空です";
}
if (!isset($_POST['age']) || !ctype_digit($_POST['age'])) {
  $errors[] = "年齢には数字を入れてください";
}
if (!isset($_POST['sex']) || !in_array($_POST['sex'], ["男", "女"])) {
  $errors[] = "性別が男または女ではありません";
}

if (count($errors) > 0) {
  print_error($errors);
  echo '<hr>';
  echo '<a href="', $gobackURL, '">戻る</a>';
  exit();
}

require_once '../../common/header.php';

$name = $_POST['name'];
$age = $_POST['age'];
$sex = $_POST['sex'];
$result = insert($name, $age, $sex);
if ($result) {
  header("Location: index.php");
  exit;
} else {
  echo '<span class="error">追加エラー</span>';
}
?>
<hr>
<p><a href="<?= $gobackURL ?>">もどる</a></p>
<?php
require_once '../../common/footer.php';