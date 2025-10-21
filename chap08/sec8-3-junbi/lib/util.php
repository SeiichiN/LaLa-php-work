<?php
// $data -- 文字列。配列はだめ。
// 文字列を画面出力するときに使う。
function h($data) {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// $data -- 文字列でも配列でもOK。
// ただし、PHPバージョン7.2.0以降であること。
function cken($data) {
  return mb_check_encoding($data, 'UTF-8');
}

// $data -- 文字列でも配列でもOK。
// $_POSTを丸ごとHTMLエスケープするのが目的。
function es($data, $charset='UTF-8') {
  if (is_array($data)) {
    return array_map(__METHOD__, $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, $charset);
  }
}
