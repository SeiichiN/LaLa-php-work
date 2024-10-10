<?php
/*
関数 fact() を作成して、次のコードを書き換えてください。
------------------------
関数名: fact()
引数:   int型 $num
戻り値: int型
------------------------
*/

function fact(int $num) : int {
	$result = 1;
	for ($i=$num; $i>=1; $i--) {
	  $result = $result * $i;
	}
	return $result;
}

$n = 10;
$result = fact($n);
echo $result;

// 修正時刻: Wed 2024/10/09 06:57:51

