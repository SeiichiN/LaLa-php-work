<?php
$msg = "　東京都　千代田区　\n\n";
$msg2 = mb_convert_kana($msg, "s");
$result = trim($msg2);
echo "処理前：" . PHP_EOL;
echo "[{$msg}]" . PHP_EOL;
echo "処理後：" . PHP_EOL;
echo "[{$result}]" . PHP_EOL;
