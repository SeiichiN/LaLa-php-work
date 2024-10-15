<?php
// define("RANK", ["松", "竹", "梅"]);
// define("RANK", array("松", "竹", "梅"));
$a = ["松", "竹", "梅"];
define("RANK", $a);
echo RANK[1];
// RANK[2] = "桜";
$a[2] = "桐";
print_r(RANK);
