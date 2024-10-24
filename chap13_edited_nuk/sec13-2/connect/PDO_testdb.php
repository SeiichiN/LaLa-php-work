<?php
require_once '../../lib/db_functions.php';
$pdo = db_connect();
// ここから画面表示
require_once '../../common/header.php'; 
if ($pdo !== NULL) {
  echo "<p>データベースに接続しました。</p>";
} else {
  echo "<p class='error'>データベースに接続できません。</p>";
}
require_once '../../common/footer.php';
