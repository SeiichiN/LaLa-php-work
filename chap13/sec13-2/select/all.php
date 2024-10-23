<?php
require_once '../../lib/util.php';
$user = "testuser";
$password = "testuser";
$dbName = "testdb";
$host = "localhost:3306";
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/tablestyle.css">
</head>

<body>
  <div>
    <?php
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "データベース{$dbName}に接続しました。";
      $sql = "SELECT id, name, age, sex FROM member";
      $stm = $pdo->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);

      echo '<table>';
      echo '<tr>';
      echo '<th>ID</th>';
      echo '<th>名前</th>';
      echo '<th>年齢</th>';
      echo '<th>性別</th>';
      echo '</tr>';
      foreach ($result as $row){
        echo "<tr>";
        echo '<td>', es($row['id']), '</td>';
        echo '<td>', es($row['name']), '</td>';
        echo '<td>', es($row['age']), '</td>';
        echo '<td>', es($row['sex']), '</td>';
        echo '</tr>';
      }
      echo '</table>';
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました</span>';
      echo $e->getMessage();
      exit();
    }
    ?>
  </div>
</body>

</html>