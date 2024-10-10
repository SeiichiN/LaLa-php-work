<?php
/*
getBodyType() という関数を作成して、その関数を使って次のコードを
書き換えてください。
-----------------------------------------------
関数名: getBodyType()
引数:   float型 $height
        float型 $weight
戻り値: string型 やせ型、普通体重、肥満
-----------------------------------------------
*/

function getBodyType(float $height, float $weight) : string {
	$bmi = $weight / (($height / 100) * ($height / 100));
	if ($bmi < 18.5) {
	  $type = "やせ型";
	} else if ($bmi < 25.0) {
	  $type = "普通体重";
	} else {
	  $type = "肥満";
	}
	return $type;
}

$height = 170;
$weight = 70;
$type = getBodyType($height, $weight);
echo $type . PHP_EOL;

// 修正時刻: Tue 2024/10/08 19:48:50
