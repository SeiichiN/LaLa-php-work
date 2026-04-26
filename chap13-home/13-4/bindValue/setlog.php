<?php
  // general_log のログ開始
  $pdo->exec("SET GLOBAL general_log_file = '/var/log/mysql/mysql.log'");
  $pdo->exec("SET GLOBAL general_log = 1");
