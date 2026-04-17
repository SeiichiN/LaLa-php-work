<?php
require_once("lib/util.php");
$utf8_string = "こんにちは";
$sjis_string = mb_convert_encoding($utf8_string, 'Shift-JIS');
$_string = [$sjis_string];
if (cken($_string)) {
  echo "配列の値は、UTF-8です。";
} else {
  echo "配列の値は、UTF-8ではありません。";
}