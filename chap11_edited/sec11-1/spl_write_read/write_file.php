<?php
$date = date("Y/n/j G:i:s");
$writedata = <<< "EOD"
ヒアドキュメントならば、
途中での改行や、
変数を使った文章が作れますね。
更新日：$date
EOD;
require_once '../../common/header.php';
$filename = "mytext.txt";
try {
  $fileObj = new SplFileObject($filename, "wb");
} catch (Exception $e) {
  echo '<span class="error">エラーがありました</span><br>';
  $err = $e->getMessage();
  exit($err);
}
$written = $fileObj->fwrite($writedata);
if ($written === false) {
  echo '<span class="error">ファイルに保存できませんでした</span>';
} else {
  echo "SplFileObjectのfwriteを使って、<br>{$filename}に{$written}バイトを書き出しました。";
  echo '<hr>';
  echo '<a href="read_file.php">ファイルを読む</a>';
}

require_once '../../common/footer.php';
