<?php
$num = 9;

do {
  echo $num . PHP_EOL;
  $num = mt_rand(1, 10);
} while ($num % 2 === 0);

/*
while ($num % 2 === 0) {
  echo $num . PHP_EOL;
  $num = mt_rand(1, 10);
}
*/
