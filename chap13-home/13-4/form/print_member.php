<?php
require_once('../../lib/util.php');
$gobackURL = "insertForm.html";
// $_POST['name'] = '木';

if (!cken($_POST)) {
  header("Location:{$gobackURL}");
  exit();
}

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
      $sql = "SELECT * FROM member";
      $stm = $pdo->prepare($sql);
      $stm->execute();
      $result = $stm->fetchAll(PDO::FETCH_ASSOC);
    ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>名前</th>
            <th>年齢</th>
            <th>性別</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($result as $row) {
            echo "<tr>";
            echo "<td>", es($row['id']), "</td>";
            echo "<td>", es($row['name']), "</td>";
            echo "<td>", es($row['age']), "</td>";
            echo "<td>", es($row['sex']), "</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
    <?php
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました</span><br>';
      echo $e->getMessage();
      exit();
    }
    ?>
    <hr>
    <a href="<?php echo $gobackURL ?>">もどる</a>
  </div>
</body>

</html>