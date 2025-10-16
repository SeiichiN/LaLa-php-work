<?php
/*
 関数addOne()を考える。
 この関数は、引数に数字を受け取り、それにプラス１した
 値を返すものとする。

 適当な数の配列を考える。$dataとする。
 その配列の要素それぞれに、関数addOne()を適用して
 配列の中身を変更したい。
*/
function addOne(&$num) {
  $num = $num + 1;
}

$data = [1,2,3,4,5];
array_walk($data, 'addOne');
print_r($data);


