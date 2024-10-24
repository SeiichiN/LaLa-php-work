<?php
function db_connect() {
  $user = "testuser";
  $password = "testuser";
  $dbName = "testdb";
  $host = "localhost:3306";
  $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

  $pdo = NULL;
  try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo 'エラーがありました。';
    echo $e->getMessage();
  }
  return $pdo;
}

function findAll() {
  $result = null;
  $pdo = db_connect();
  try {
    $sql = "SELECT id, name, age, sex FROM member";
    $stm = $pdo->prepare($sql);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
    echo "エラーがありました。";
    echo $e->getMessage();
  }
  return $result;
}

function findByName(string $name) : array {
  $result = [];
  $pdo = db_connect();
  try {
    $sql = "SELECT * FROM member WHERE name LIKE :name";
    $stm = $pdo->prepare($sql);
    $stm->bindValue(':name', "%{$name}%", PDO::PARAM_STR);
    $stm->execute();
    $result = $stm->fetchAll(PDO::FETCH_ASSOC);
  } catch (Exception $e) {
    echo 'エラーがありました';
    echo $e->getMessage();
  }
  return $result;
}
