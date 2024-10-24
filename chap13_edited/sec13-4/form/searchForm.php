<?php require_once '../../common/header.php'; ?>
<form action="search.php" method="post">
  <ul>
    <li>
      <label>名前を検索します（部分一致）<br>
        <input type="text" name="name" placeholder="名前を入力してください">
      </label>
    </li>
    <li><input type="submit" value="検索する"></li>
  </ul>
</form>
<?php require_once '../../common/footer.php';
