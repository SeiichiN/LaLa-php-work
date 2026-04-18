<?php
require_once('../lib/util.php');

$_POST['hobby'] = ["cook'n", "<swimming>", "&music"];
$_POST = es($_POST);
print_r($_POST);
