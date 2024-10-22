<?php
session_start();
require_once '../../lib/util.php';
killSession();
require_once '../../common/header.php';
?>
<p>セッションを破棄しました。</p>
<?php
require_once '../../common/footer.php';
