<?php
$myArray = ['a', 'b', 'c', 'd', 'e'];
$removed = array_shift($myArray);
print_r($myArray);
print_r($removed);

$removed = array_pop($myArray);
print_r($myArray);
print_r($removed);
