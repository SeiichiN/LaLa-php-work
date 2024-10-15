<?php
function es($data, $charset='UTF-8') {
  if (is_array($data)) {
    return array_map('es', $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}

$str = es('<h1>aaa</h1>');
echo $str;
