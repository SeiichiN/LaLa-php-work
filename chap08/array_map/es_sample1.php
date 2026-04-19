<?php
require_once('../lib/util.php');

$_POST['name'] = '<h1>太郎</h1>';
$_POST = es($_POST);
print_r($_POST);