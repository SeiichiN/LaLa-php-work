<?php
$page = "PHP 8サンプル.html";
$path = rawurlencode($page);
$url = "http://sample.com/{$path}";
echo $url;
