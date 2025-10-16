<?php
#
# 配列$array と $value を受け取って
# $valueが配列の中になければ、
# $valueを配列に追加する関数
#
function array_addUnique(&$array, $value) {
  if (in_array($value, $array)) {
    return false;
  } else {
    $array[] = $value;  # 配列本体に追加
    return true;
  }
}

$myList = ['blue', 'green'];
array_addUnique($myList, 'white');
array_addUnique($myList, 'blue');
array_addUnique($myList, 'red');
array_addUnique($myList, 'white');
print_r($myList);
