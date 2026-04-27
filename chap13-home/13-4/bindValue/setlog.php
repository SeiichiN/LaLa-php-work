<?php
  // general_log のログ開始
  // logフォルダを作成すること。
  // mysql.log は自動で作成される。
  //
  // for linux and mac
  // $pdo->exec("SET GLOBAL general_log_file = '/var/log/mysql/mysql.log'");
  //
  // for windows
  $pdo->exec("SET GLOBAL general_log_file = 'c:/xampp/mysql/log/mysql.log'");
  $pdo->exec("SET GLOBAL general_log = 1");
