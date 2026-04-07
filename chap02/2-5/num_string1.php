<?php
$ninzu = "3人" + "2人";
var_dump($ninzu);
$price = "500円" * $ninzu;
var_dump($price);
$price = $price * "0.85 割引率";
echo "料金{$price}円、{$ninzu}人";
