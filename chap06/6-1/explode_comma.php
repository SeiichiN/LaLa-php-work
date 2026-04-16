<?php
$data = "赤井一郎、伊藤 純、上野信二";
$delimiter = "、";
$nameList = explode($delimiter, $data);
print_r($nameList);
