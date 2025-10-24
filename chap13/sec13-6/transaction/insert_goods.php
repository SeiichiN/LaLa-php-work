<?php
require_once('../lib/util.php');
$gobackURL = "insertform.php";

if (!cken($_POST)) {
  header("Location: {$gobackURL}");
  exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <div>
    <?php
    $errors = [];
    if (!isset($_POST['id']) || $_POST['id'] === '') {
      $errors[] = "商品IDが空です";
    }
    if (!isset($_POST['name']) || $_POST['name'] === '') {
      $errors[] = "商品名が空です";
    }
    if (!isset($_POST['brand']) || $_POST['brand'] === '') {
      $errors[] = "ブランドが空です";
    }
    if (!isset($_POST['quantity']) || !ctype_digit($_POST['quantity'])) {
      $errors[] = "個数が整数値ではありません";
    }
    if (count($errors) > 0) {
      echo '<ol class="error">'; 
      foreach ($errors as $value) {
        echo "<li>{$value}</li>";
      }
      echo '</ol>';
      echo '<hr>';
      echo '<a href="', $gobackURL, '">戻る</a>';
    }
    $user = 'inventoryuser';
    $password = 'inventoryuser';
    $dbName = 'inventory';
    $host = 'localhost:3306';
    $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ERR_NONE, PDO::ERRMODE_EXCEPTION);
    } catch (Exception $e) {
      $err = '<span class="error">データベースに接続できません</span>';
      $err .= $e->getMessage();
      exit($err);
    }
    try {
      $pdo->beginTransaction();
      $sql1 = <<< EOD
            INSERT INTO goods (id, name, size, brand)
            VALUES (:id, :name, :size, :brand)
            EOD;
      $sql2 = <<< EOD
            INSERT INTO stock (goods_id, quantity)
            VALUES (:goods_id, :quantity)
            EOD;
      $insertGoods = $pdo->prepare($sql1);
      $insertStock = $pdo->prepare($sql2);
      $insertGoods->bindValue(':id', $_POST['id'], PDO::PARAM_STR);
      $insertGoods->bindValue(':name', $_POST['name'], PDO::PARAM_STR);
      $insertGoods->bindValue(':size', $_POST['size'], PDO::PARAM_STR);
      $insertGoods->bindValue(':brand', $_POST['brand'], PDO::PARAM_STR);
      $insertStock->bindValue(':goods_id', $_POST['id'], PDO::PARAM_STR);
      $insertStock->bindValue(':quantity', $_POST['quantity'], PDO::PARAM_INT);
      $insertGoods->execute();
      $insertStock->execute();
      $pdo->commit();
      echo "商品データ・在庫データを追加しました。";
    } catch (Exception $e) {
      $pdo->rollBack();
      echo '<span class="error">登録エラーがありました。</span><br>';
      echo $e->getMessage();
    }
    ?>
    <hr>
    <p><a href="index.php">一覧へ</a></p>
  </div>
</body>
</html>