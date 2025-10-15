<?php
$pattern = "/東京|横浜/u";
var_dump(preg_match($pattern, "東京タワー")); echo PHP_EOL;
var_dump(preg_match($pattern, "横浜駅前")); echo PHP_EOL;
var_dump(preg_match($pattern, "新東京美術館")); echo PHP_EOL;
var_dump(preg_match($pattern, "東横ホテル")); echo PHP_EOL;
