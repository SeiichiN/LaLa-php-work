<?php
$myArray = ['a', 'b', 'c'];
array_push($myArray, 'd', 'e');
$removed = array_splice($myArray, 1, 2);
echo '$myArray', PHP_EOL;
print_r($myArray);
echo '$removed', PHP_EOL;
print_r($removed);

