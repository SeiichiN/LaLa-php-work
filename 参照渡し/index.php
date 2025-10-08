<?php
function oneUp(&$nums) {
  for ($i=0; $i<count($nums); $i++){
    $nums[$i] += 1;
  }
}

$nums = [1,2,3,4,5];
oneUp($nums);
print_r($nums);

// 修正時刻: Thu 2025/10/09 06:40:36
