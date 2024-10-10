<?php
$a = 7;
$b = 2380;
$m1 = printf('番号は%03dです。', $a);
$m2 = printf("請求額は%'*6d円", $b);
echo "<br>" . PHP_EOL;
echo $m1;
echo $m2;
