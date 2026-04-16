<?php
$myArray = ["a", "b", "c", "d", "e"];
$replace = ["X", "Y", "Z"];
$removed = array_splice($myArray, 1, 3, $replace);
echo '実行後：$myArray', PHP_EOL;
print_r($myArray);  
echo '戻り：$removed', PHP_EOL;
print_r($removed);  