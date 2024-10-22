<?php
require_once '../../lib/util.php';
require_once '../../lib/db_functions.php';
$pdo = db_connect();

require_once '../../common/header.php';
if ($pdo !== null) {
  echo "データベースに接続しました。";
} else {
  echo "データベースの接続に失敗しました。";
}
require_once '../../common/footer.php';

// 修正時刻: Wed 2024/10/23 07:16:21
