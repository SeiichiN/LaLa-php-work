<?php
$nums = [3, 4, -2, 1, -2, 9, 0, 5];
usort($nums, function($a, $b) {
  return $a <=> $b;
});
print_r($nums);

