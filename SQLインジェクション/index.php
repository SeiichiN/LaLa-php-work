<?php require_once 'common/header.php'; ?>
<h1>IDで検索</h1>
<form action="search.php" method="post">
  <label>
    検索するID：
    <input type="text" name="id">
    <input type="submit" value="検索">
  </label>
</form>
<?php require_once 'common/footer.php';

