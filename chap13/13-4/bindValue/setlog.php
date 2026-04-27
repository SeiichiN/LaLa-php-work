<?php
$user = "root";
$password = "root";
$dbName = "testdb";
$host = "localhost:3306";
$dsn = "mysql:host={$host};dbname={$dbName};charset=utf8";

// 1 -- general_log を有効にする
// 0 -- general_log を無効にする
$setLog = 0;
try {
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // general_log のログ開始
  // logフォルダを作成すること。
  // mysql.log は自動で作成される。
  //
  // for linux and mac
  $pdo->exec("SET GLOBAL general_log_file = '/var/log/mysql/mysql.log'");
  //
  // for windows
  // $pdo->exec("SET GLOBAL general_log_file = 'c:/xampp/mysql/log/mysql.log'");
  $pdo->exec("SET GLOBAL general_log = {$setLog}");
} catch (Exception $e) {
  echo '<span class="error">エラーがありました</span><br>';
  echo $e->getMessage();
  exit();
}
echo "ログを{$setLog}に設定しました。", PHP_EOL;
echo 'c:\xampp\mysql\log\mysql.log';
