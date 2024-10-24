<?php
require_once 'lib/util.php';
require_once 'lib/db_functions.php';

check_enc($_POST);
// 入力値のチェックはパス
$id = $_POST['id'];

// データベースで検索
$pdo = db_connect();
$result = [];
try {
  $sql = "SELECT * FROM member WHERE id = :id";
  $stm = $pdo->prepare($sql);
  $stm->bindValue(':id', $id, PDO::PARAM_STR);
  $stm->execute();
  $result = $stm->fetchAll(PDO::FETCH_ASSOC);
} catch (Exception $e) {
  echo "問い合わせエラー";
}

require_once 'common/header.php';
?>
<?php if (count($result) > 0) : ?>
  <p>id:「<?= h($id) ?>」であるレコード</p>
  <table>
    <tr>
      <th>ID</th><th>名前</th><th>パスワード</th>
    </tr>
    <?php foreach ($result as $row) : ?>
      <tr>
        <td><?= h($row['id']) ?></td>
        <td><?= h($row['name']) ?></td>
        <td><?= h($row['password']) ?></td>
      </tr>
    <?php endforeach; ?>
  </table>
<?php else : ?>
  <p>ID:「<?= h($id) ?>」は見つかりません</p>
<?php endif; ?>
<hr>
<p><a href="index.php">もどる</a></p>

<?php require_once 'common/footer.php';
