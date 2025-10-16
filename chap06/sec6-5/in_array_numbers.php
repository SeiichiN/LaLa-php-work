<?php
$numList = [1008, 1234, 1301];
$numbers = [1301, 1206, 1008, 1214];

function checkNumber($no): string {
	global $numbers;
	if (in_array($no, $numbers)) {
	  return "{$no}番は合格です。";
	} else {
	  return "{$no}番は見つかりません。";
	}
}
?>
<html>
<body>
<?php
  echo "<ol>", PHP_EOL;
  foreach ($numList as $value) {
    echo "<li>", checkNumber($value), "</li>", PHP_EOL;
  }
  echo "</ol>", PHP_EOL;
?>
</body>
</html>

