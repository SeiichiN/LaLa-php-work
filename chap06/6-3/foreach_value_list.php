<?php
$nameList = ["赤井一郎", "青木五郎", "上野信二"];
echo "<ol>", PHP_EOL;
foreach ($nameList as $value) {
  echo "<li>{$value}</li>", PHP_EOL;
}
echo "</ol>", PHP_EOL;
