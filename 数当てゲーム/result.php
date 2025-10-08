<?php
$user = (int) $_POST['user_num'];
echo "user:", $user, "<br>";
$com = mt_rand(1, 9);
echo "com:", $com , "<br>";
// PHP7以降のバージョン
$moji = match ($user <=> $com) {
  0 => 'あたりです',
  1 => 'おおきすぎます',
  -1 => 'ちいさすぎます',
};
echo $moji;
?>
<a href="index.php">もどる</a>


