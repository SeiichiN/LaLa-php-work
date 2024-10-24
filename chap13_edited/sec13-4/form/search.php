<?php
require_once '../../lib/util.php';
require_once '../../lib/db_functions.php';
check_enc($_POST);
$gobackURL = "searchForm.php";

if (empty($_POST)) {
  header("Location: {$gobackURL}");
  exit;
} else if (!isset($_POST['name']) || $_POST['name'] === '') {
  header("Location: {$gobackURL}");
  exit;
}

require_once '../../common/header.php';
$name = $_POST['name'];
$result = findByName($name);
?>
<?php if (count($result) > 0) : ?>
  <h3>名前に「<?= h($name) ?>」が含まれているレコード</h3>
  <table>
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>年齢</th>
      <th>性別</th>
    </tr>
    <?php foreach ($result as $row) : ?>
      <tr>
        <td><?= h($row['id']) ?></td>
        <td><?= h($row['name']) ?></td>
        <td><?= h($row['age']) ?></td>
        <td><?= h($row['sex']) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php else : ?>
  <span class="error">エラーがありました</span><br>
<?php endif; ?>
<hr>
<p><a href="<?= $gobackURL ?>">もどる</a></p>
<?php 
require_once '../../common/footer.php';
