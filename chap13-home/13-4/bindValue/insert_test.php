<?php
$user = "testuser";
$password = "testuser";
$dbName = "testdb";
$host = "localhost:3306";
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

$a = "a";
// $b = 4;
try {
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  /*
  $sql = "INSERT INTO insert_test (int_v, float_v) VALUES (:a, :b)";
  $stm = $pdo->prepare($sql);
  $stm->bindValue(':a', $a, PDO::PARAM_INT);
  $stm->bindValue(':b', $b, PDO::PARAM_INT);
  $stm->execute();
  */

  $sql = "SELECT * FROM insert_test WHERE int_v >= :a";
  $stm = $pdo->prepare($sql);
  $stm->bindValue(':a', $a, PDO::PARAM_INT);
  $stm->execute();
  $result = $stm->fetchAll(PDO::FETCH_ASSOC);
  foreach ($result as $row) {
    echo $row['int_v'], " | ", $row['float_v'], "<br>", PHP_EOL;
  }
  } catch (Exception $e) {
  echo '<span class="error">エラーがありました</span><br>';
  echo $e->getMessage();
  exit();
}
echo 'c:\xampp\mysql\log\mysql.log';
