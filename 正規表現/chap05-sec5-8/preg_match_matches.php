<?php
// $pattern = "/^佐.+子$/mu";
$pattern = "/\A佐.+子\z/mu";
$subject = <<< "names"
佐藤有紀
阿佐田美和子
佐藤ゆう子江
佐藤有紀子
塩田智子
杉山香
names;

$result = preg_match($pattern, $subject, $matches);

if ($result === false) {
  echo "エラー：", preg_last_error();
} else if ($result === 0){
  echo "マッチした値はありません";
} else {
  echo "「{$matches[0]}」が見つかりました。";
  print_r($matches);
}

// 修正時刻: Thu 2024/10/10 18:04:03
