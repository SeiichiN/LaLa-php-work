<?php
echo M_PI;  // pi()と同じ
echo "<br>", PHP_EOL;
$n = printf("%.3F", M_PI);
echo "<br>", PHP_EOL;
echo "文字数 $n";
