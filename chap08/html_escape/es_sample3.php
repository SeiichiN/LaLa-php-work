<?php
function es($data) {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}


$_POST['hobby'] = ["cook'n", "<swimming>", "&music"];
$hobby = $_POST['hobby'];
foreach ($hobby as $key => $value) {
  echo es($value), "<br>", PHP_EOL;
}

