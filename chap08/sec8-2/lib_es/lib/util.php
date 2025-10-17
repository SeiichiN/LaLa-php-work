<?php
function h($data) {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}
function cken($data) {
  return mb_check_encoding($data, 'UTF-8');
}
/*
function es($data, $charset='UTF-8') {
  if (is_array($data)) {
    return array_map(__METHOD__, $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}
*/
/*
function cken(array $data) {
  $result = true;
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $value = implode("", $value);
    }
    if (!mb_check_encoding($value)) {
      $result = false;
      break;
    }
  }
  return $result;
}
*/
/*
$tsuri = mb_convert_encoding("釣り", 'Shift_JIS');
$myData = [
  "name" => "太郎",
  "age" => 25,
  "hobby" => ["散歩", $tsuri, "ドライブ"],
];

if (cken($myData)) {
  echo "正しい";
} else {
  echo "違う";
}
*/