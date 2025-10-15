<?php
$teamA = ["赤井一郎", "伊藤五郎", "上野神事"];
$teamB = ["江藤幸代", "小野幸子"];

function teamList($teamname, $namelist) {
  echo $teamname, PHP_EOL;
  echo "<ol>", PHP_EOL;
  for ($i=0; $i < count($namelist); $i++) {
    echo "<li>{$namelist[$i]}</li>", PHP_EOL;
  }
  echo "</ol>", PHP_EOL;
}
?>

<html>
<body>
<?php
  teamList("Aチーム", $teamA);
  teamList("Bチーム", $teamB);
?>
</body>
</html>


