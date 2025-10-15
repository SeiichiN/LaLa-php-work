<?php
$escaped = preg_quote("http://sample.com/php/", "/");
echo $escaped;  // http\:\/\/sample\.com\/php\/
// $pattern = "/{$escaped}/u";

$pattern = "/http\:\/\/sample\.com\/php\//u";
echo $pattern, PHP_EOL;
var_dump(preg_match($pattern, "URLはhttp://sample.com/php/です。"));
var_dump(preg_match($pattern, "URLはhttp://sample.com/swift/です。"));
