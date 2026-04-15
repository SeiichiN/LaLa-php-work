<?php
$id = "猫である";
$length = strlen($id);          # 5
echo $length, PHP_EOL;
for ($i=0; $i<$length; $i++) {
  echo "{$i}-", $id[$i], PHP_EOL;
}
