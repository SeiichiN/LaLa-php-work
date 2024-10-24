<?php
require_once 'lib/util.php';
require_once 'common/header.php';
const ERROR_MSG = "ユーザーID・パスワードが違います";
check_enc($_POST);
$errors = [];
if (isset($_POST['userid'])) {
  $userid = $_POST['userid'];
  $userid = mb_convert_kana($userid, "sa");
  $userid = trim($userid);
  if (!preg_match("/^\w{6,10}$/", $userid)) {
    $errors[] = ERROR_MSG;
  }
}
if (isset($_POST['password'])) {
  $password = trim($_POST['password']);
  if (!preg_match("/^\w{6}/", $password)) {
    if (count($errors) === 0) {
      $errors[] = ERROR_MSG;
    }
  }
}

?>
<h2>ログイン</h2>
<form action="" method="post">
  <p><label>
    ユーザーID：
    <input type="text" name="userid">
  </label></p>
  <p><label>
    パスワード：
    <input type="password" name="password">
  </label></p>
  <p><input type="submit" value="ログイン"></p>
</form>
<?php 
if (count($errors) > 0) {
  echo '<ul class="error">';
  foreach ($errors as $err) {
    echo "<li>", $err, "</li>";
  }
  echo "</ul>";
}
?>
<?php
require_once 'common/footer.php';
