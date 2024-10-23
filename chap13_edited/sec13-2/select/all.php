<?php
require_once '../../lib/util.php';
require_once '../../lib/db_functions.php';
$result = findAll();
// ここから画面表示
require_once '../../common/header.php';
?>
<?php if ($result !== null) : ?>
  <table>
    <tr>
      <th>ID</th>
      <th>名前</th>
      <th>年齢</th>
      <th>性別</th>
    </tr>
    <?php foreach ($result as $row) : ?>
      <tr>
        <td><?= h($row['id']); ?></td>
        <td><?= h($row['name']); ?></td>
        <td><?= h($row['age']); ?></td>
        <td><?= h($row['sex']); ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php else : ?>
  <span class="error">データベース問い合わせエラー</span>
<?php endif; ?>
<?php
require_once '../../common/footer.php';
