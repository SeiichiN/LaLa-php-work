<?php
// おみくじをつくる(練習問題)
$num = mt_rand(1, 5);
$result = match($num) {
  1 => "大吉",
  2 => "中吉",
  3 => "小吉",
  4 => "末吉",
  default => "凶",
};
echo $result;

