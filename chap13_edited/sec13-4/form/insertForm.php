<?php
require_once '../../common/header.php';
?>
<form action="insert_member.php" method="post">
  <ul>
    <li>
      <label>名前：
        <input type="text" name="name" placeholder="名前">
      </label>
    </li>
    <li>
      <label>年齢：
        <input type="number" name="age" placeholder="半角数字">
      </label>
    </li>
    <li>性別：
      <label><input type="radio" name="sex" value="男" checked>男性</label>
      <label><input type="radio" name="sex" value="女">女性</label>
    </li>
    <li><input type="submit" value="追加する"></li>
  </ul>
</form>
<?php require_once '../../common/footer.php';
