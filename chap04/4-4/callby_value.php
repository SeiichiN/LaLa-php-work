<?php
function oneUp(&$var) {
  $var += 1;  //6
}

$num = 5;
oneUp($num);
echo $num;    // 6
