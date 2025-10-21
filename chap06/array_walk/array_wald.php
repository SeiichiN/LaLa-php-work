<?php
function addOne(&$num) {
  $num += 1;
}

$data = [1,2,3,4,5];
array_walk($data, 'addOne');
print_r($data);
