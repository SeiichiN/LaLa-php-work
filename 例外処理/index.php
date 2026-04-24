<?php
$a = 20;
$b = 2;

try {
  $c = $a / $b;
  echo $c;
} catch (DivisionByZeroError $e) {
  echo $e->getMessage();
}
