<?php
$namelist = ['赤井一郎', '伊藤ゴロー', '上野神示'];
echo '<table border="1">', PHP_EOL;
echo "<tr>", PHP_EOL;
foreach ($namelist as $value) {
  echo "<td>{$value}さん</td>", PHP_EOL;
}
echo "</tr>", PHP_EOL;
echo "</table>", PHP_EOL;

