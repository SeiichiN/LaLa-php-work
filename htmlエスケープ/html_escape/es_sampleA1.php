<?php
function es(string $data): string {
  return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

$_POST['name'] = '<h1>太郎</h1>';
$name = $_POST['name'];
echo es($name), "<br>", PHP_EOL;