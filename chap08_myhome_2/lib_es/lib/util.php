<?php
function h($data) {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

$str = h('<h1>aaa</h1>');
echo $str;
