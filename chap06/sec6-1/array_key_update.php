<?php
$goods = array(
  "price" => 2340,
  "id"    => "R56",
  "size"  => "M",
);
$goods['price'] = 3500;
$goods['name'] = "Ｔシャツ";
echo "id: {$goods['id']}", PHP_EOL;
echo "name: {$goods['name']}", PHP_EOL;
echo "size: {$goods['size']}", PHP_EOL;
echo "price: {$goods['price']}円", PHP_EOL;
