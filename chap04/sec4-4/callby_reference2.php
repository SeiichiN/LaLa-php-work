<?php
function oneUp(&$list) {
  for ($i=0; $i < count($list); $i++) {
    $list[$i] += 1;
  }
}

$num = [1,2,3];
oneUp($num);
print_r($num);

