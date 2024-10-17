<?php
/**
 * 引数が文字列の場合は、戻り値は文字列
 * 引数が配列の場合は、戻り値は配列
 */
function es(array|string $data, string $charset='UTF-8') : mixed {
  if (is_array($data)) {
    return array_map('es', $data);
  } else {
  	return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}
/*
$names = ['<h1>かぐや</h1>', 'うらしま'];
$names = es($names);  // es('かぐや'), es('うらしま')
print_r($names);

$name = '<h1>太郎</h1>';
echo es($name);
*/
