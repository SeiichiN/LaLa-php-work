<?php
function es(array|string $data): mixed {
  if (is_array($data)) {
    return array_map('es', $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, "UTF-8");
  }
}

$_POST['name'] = '<h1>太郎</h1>';
$_POST = es($_POST);
$name = $_POST['name'];
echo $name, "<br>", PHP_EOL;
