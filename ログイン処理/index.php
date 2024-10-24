<?php
require_once 'lib/util.php';
require_once 'common/header.php';

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
require_once 'common/footer.php';
