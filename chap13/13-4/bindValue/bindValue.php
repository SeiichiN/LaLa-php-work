<?php
require_once('../../lib/util.php');
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
  <title>データベースに接続する</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/tablestyle.css">
</head>
<body>
  <div>
    <?php
    $min = '1 OR 1 = 1 -- ';
    $max = 40;
    $sex = '男';
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      echo "データベース{$dbName}に接続しました。", PHP_EOL;
      
      $sql = "SELECT * FROM member
              WHERE age >= :min AND age <= :max AND sex = :sex";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':min', $min, PDO::PARAM_INT);
      $stm->bindValue(':max', $max, PDO::PARAM_INT);
      $stm->bindValue(':sex', $sex, PDO::PARAM_STR);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
      # echo $result[1]['name'], '<br>';

      echo "<table>";
      echo "<thead><tr>";
      echo "<th>ID</th>";
      echo "<th>名前</th>";
      echo "<th>年齢</th>";
      echo "<th>性別</th>";
      echo "</tr></thead>";
      echo "<tbody>";
      foreach ($result as $row) {
        echo "<tr>";
        echo "<td>", es($row['id']), "</td>";
        echo "<td>", es($row['name']), "</td>";
        echo "<td>", es($row['age']), "</td>";
        echo "<td>", es($row['sex']), "</td>";
        echo "</tr>";
      }
      echo "</tbody>";
      echo "</table>";
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました</span><br>';
      echo $e->getMessage();
      exit();
    }
    ?>
  </div>
</body>
</html>