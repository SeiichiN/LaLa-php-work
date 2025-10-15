<?php
$namelist = ['赤井一郎', '伊藤ゴロー', '上野神示'];
echo "<ol>", PHP_EOL;
foreach ($namelist as $value) {
  echo "<li>{$value}さん</li>", PHP_EOL;
}
echo "</ol>", PHP_EOL;

