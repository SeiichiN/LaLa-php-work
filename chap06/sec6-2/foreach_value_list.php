<?php
$namelist = ["赤井一郎", "伊藤五郎", "上野信二"];

echo "<ol>", PHP_EOL;
foreach ($namelist as $value) {
  echo "<li>", $value, "さん</li>", PHP_EOL;
}
echo "</ol>", PHP_EOL;

for ($i=0; $i < count($namelist); $i++) {
  echo $namelist[$i], PHP_EOL;
}

