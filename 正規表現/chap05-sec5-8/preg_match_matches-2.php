<?php
$pattern = "/^佐(.|\n)+香$/u";
// $pattern = "/\A佐.+子\z/mu";
$subject = <<< "names"
佐藤有紀
阿佐田美和子
佐藤ゆう子江
佐藤有紀子
塩田智子
杉山香
names;

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



// $resArray = explode("\n", $result);
$resArray = preg_split("/PHP_EOL/", $subject);
print_r($resArray);

foreach ($resArray as $str) {
  var_dump(preg_match($pattern, $str));
}





// 修正時刻: Fri 2024/10/11 06:56:04
