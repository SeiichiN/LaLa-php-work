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

$result = preg_match($pattern, $subject, $matches);

if ($result === false) {
  echo "エラー：", preg_last_error();
} else if ($result === 0){
  echo "マッチした値はありません";
} else {
  echo "「{$matches[0]}」が見つかりました。";
  print_r($matches);
}

// 修正時刻: Thu 2024/10/10 16:31:21
