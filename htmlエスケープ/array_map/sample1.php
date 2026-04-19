<?php
function plus1($num) {
  return $num + 1;
}
$numbers = [1, 2, 3, 4, 5];
$result = array_map('plus1', $numbers);
print_r($result);
