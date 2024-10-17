<?php
/**
 * 引数が文字列の場合は、戻り値は文字列
 */
function h(string $data) : mixed {
	return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}
/*
$names = ['<h1>かぐや</h1>', 'うらしま'];
foreach ($names as $name) {
  echo h($name);
}

$name = '<h1>太郎</h1>';
echo h($name);
*/
