<?php
function add_dayone($data) {
  return $data . "だよね";
}

$person = [              # 連想配列
  'name' => '太郎',
  'age' => 23
];
$result = array_map('add_dayone', $person);
print_r($result);
