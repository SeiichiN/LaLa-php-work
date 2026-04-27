<?php
require_once('../../lib/util.php');
$gobackURL = "insertform.html";

if (cken($_POST) == false) {
  header("Location:{$gobackURL}");
  exit();
}

$errors = [];
if (isset($_POST['name']) == false || $_POST['name'] === '') {
  $errors[] = "名前が空です";
}
if (isset($_POST['age']) == false ||
    ctype_digit($_POST['age']) == false) {
  $errors[] = "年齢には数値を入れてください";
}
if (isset($_POST['sex']) == false ||
    !in_array($_POST['sex'], ["男", "女"])) {
  $errors[] = "性別が男または女ではありません";
}

if (count($errors) > 0) {
  echo '<ol class="error">'; 
  foreach ($errors as $value) {
    echo "<li>", $value, "</li>";
  }
  echo '</ol>';
  echo "<hr>";
  echo '<a href="', $gobackURL, '">戻る</a>';
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
  <title>名前検索</title>
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/tablestyle.css">
</head>

<body>
  <div>
    <?php
    $name = $_POST['name'];
    $age = (int) $_POST['age'];
    $sex = $_POST['sex'];
    try {
      $pdo = new PDO($dsn, $user, $password);
      $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $sql = "INSERT INTO member (name, age, sex)
              VALUES (:name, :age, :sex)";
      $stm = $pdo->prepare($sql);
      $stm->bindValue(':name', $name, PDO::PARAM_STR);
      $stm->bindValue(':age', $age, PDO::PARAM_INT);
      $stm->bindValue(':sex', $sex, PDO::PARAM_STR);
      $result1 = $stm->execute();
      
      if ($result1 == true) {
        $sql = "SELECT * FROM member";
        $stm = $pdo->prepare($sql);
        $stm->execute();
        $result = $stm->fetchAll(PDO::FETCH_ASSOC);
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
      } else {
        echo '<span class="error">追加エラーがありました</span><br>';
      }
    } catch (Exception $e) {
      echo '<span class="error">エラーがありました</span><br>';
      echo $e->getMessage();
      exit();
    }
    ?>
    <hr>
    <p><a href="<?php echo $gobackURL; ?>">戻る</a></p>
  </div>
</body>

</html>