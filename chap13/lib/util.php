<?php
/**
 * 引数が文字列の場合は、戻り値は文字列
 * 引数が配列の場合は、戻り値は配列
 */
function es(array|string $data = null, string $charset='UTF-8') : mixed {
  if (is_array($data)) {
    return array_map('es', $data);
  } else {
  	return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}

function cken(array $data) : bool {
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

