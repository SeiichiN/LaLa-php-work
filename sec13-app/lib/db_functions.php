<?php
function connect() {
  $user = 'testuser';
  $password = 'testuser';
  $dbName = 'testdb';
  $host = 'localhost:3306';
  $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
  try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo '<span class="error">データベース接続エラー</span>';
    echo $e->getMessage();
    exit();
  }
  return $pdo;
}

function findAll() {
  $pdo = connect();
  try {
    $sql = "SELECT * FROM member";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span>';
    echo $e->getMessage();
    exit();
  }
  return $result;
}

function create(array $person) {
  $pdo = connect();
  try {
    $sql = "INSERT INTO member (name, age, sex) " .
      " VALUES (:name, :age, :sex)";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':name', $person['name'], PDO::PARAM_STR);
    $stm->bindValue(':age', $person['age'], PDO::PARAM_INT);
    $stm->bindValue(':sex', $person['sex'], PDO::PARAM_STR);
    $result = $stm->execute();
  } catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span>';
    echo $e->getMessage();
    $result = false;
  } 
  return $result; 
}
// p562
function findByName($name) {
  $pdo = connect();
  try {
    $sql = "SELECT * FROM member WHERE name LIKE :name ";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
    echo '<span class="error">エラーがありました。</span>';
    echo $e->getMessage();
    $result = [];
  } 
  return $result; 
}