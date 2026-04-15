<?php
$filepath = "/goods/image/cat/";
var_dump(preg_match("/\/image\//u", $filepath)); #1
var_dump(preg_match("#/image/#u", $filepath));   #1
