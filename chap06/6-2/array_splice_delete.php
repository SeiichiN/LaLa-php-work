<?php
$myArray = ["a", "b", "c", "d", "e"];
$removed = array_splice($myArray, 1, 2);
echo '実行後：$myArray', PHP_EOL;
print_r($myArray);  # ["a", "d", "e"]
echo '戻り：$removed', PHP_EOL;
print_r($removed);  # ["b", "c"]
