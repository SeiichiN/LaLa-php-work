<?php
require_once '../../lib/util.php';
require_once '../../lib/db_functions.php';
$result = findAll();
// ここから画面表示
require_once '../../common/header.php';

if ($result !== null) {
  disp_table($result);
} else {
  echo '<span class="error">データベース問い合わせエラー</span>';
}

require_once '../../common/footer.php';
