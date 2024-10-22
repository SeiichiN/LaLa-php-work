<?php
function db_connect() {
  $user = "testuser";
  $password = "testuse";
  $dbName = "testdb";
  $host = "localhost:3306";
  $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

  $pdo = null;
  try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo '<span class="error">データベース接続エラー</span>';
    echo $e->getMessage();
  }
  return $pdo;
}

// 修正時刻: Wed 2024/10/23 07:16:21
