<?php
$pattern = "/佐.+紀\n/u";
// $pattern = "/^佐.+子$/um";
// $pattern = "/^佐.+子$/um";
// $pattern = "/\A佐.+子\r\n\z/um";

$subject = <<< names
  佐藤有紀
  佐藤ゆう子
  塩田智子
  杉山香
  佐々山とも子
  names;

// file_put_contents("name.txt", $subject);

$result = preg_match($pattern, $subject, $matches);
if ($result === false) {
  echo "エラー：", preg_last_error();
} else if ($result == 0) {
  echo "マッチした値はありません。";
} else {
  echo "「", $matches[0], "」がみつかりました。";
  print_r($matches);
}

// 修正時刻: Wed 2025/10/15 06:07:22
