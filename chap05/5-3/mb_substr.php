<?php
$msg = "吾輩は猫である。名前はまだない。";
echo mb_strlen($msg), PHP_EOL;        # 16
echo mb_substr($msg, 4), PHP_EOL;     # である。名前はまだない。
echo mb_substr($msg, 4, 10), PHP_EOL; # である。名前はまだな
echo mb_substr($msg, -6);             # はまだない。
