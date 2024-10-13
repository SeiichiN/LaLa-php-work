<?php

$pattern = "/^佐.+子\r?$/mu";

$subject = <<< "names"
佐藤有紀
中佐々山百合子
佐々木子玉
佐藤ゆう子
塩田智子
杉山香
names;

$subject_bak = "佐藤有紀\r\n中佐々山百合子\r\n佐々木子玉\r\n佐藤ゆう子\r\n塩田智子\r\n杉山香";

file_put_contents('subject.txt', $subject);

$result = preg_match($pattern, $subject, $matches); //all で複数の値が取れる

/*
if ($result) {
	echo $matches[0];
}
*/
file_put_contents('matches.txt', $matches);

$matches[0] = preg_replace("/\r/", "", $matches[0]);

if ($result === false) {
    echo "エラー:", preg_last_error();
} else if ($result === 0) {
    echo "マッチした値はありません";
} else {
    // echo $matches[0];
    echo "「$matches[0]」が見つかりました。", PHP_EOL;
}

