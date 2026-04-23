<?php
require_once('Person.php');

$p1 = new Person('太郎', 23);
$p2 = new Person('花子', 22);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <p><?php echo Person::print_company(); ?></p>
  <p><?php $p1->print_self(); ?></p>
  <p><?php $p2->print_self(); ?></p>
</body>
</html>