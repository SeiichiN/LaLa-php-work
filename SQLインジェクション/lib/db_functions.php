<?php
function db_connect() {
  $user = 'userdbuser';
  $password = 'userdbuser';
  $dbName = 'userdb';
  $host = 'localhost:3306';
  $dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";
  $pdo = null;
  try {
    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch (Exception $e) {
    echo 'データベース接続エラー';
    echo $e->getMessage();
  }
  return $pdo;
}
