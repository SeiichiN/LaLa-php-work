<?php
$name = "佐藤ゆう子";

$pattern = "/\A佐.+子$/";

var_dump(preg_match($pattern, $name))
;

