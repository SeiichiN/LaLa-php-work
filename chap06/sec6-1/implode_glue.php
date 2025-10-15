<?php
$data = ["赤井一郎","伊藤　淳","上野神示"];
$nameList = implode("さん、", $data);
$nameList .= "さん";
echo $nameList;

