<?php
function addOne($num) {
  return $num + 1;
}

$data = [1,2,3,4,5];
$new = array_map('addOne', $data);
print_r($new);
