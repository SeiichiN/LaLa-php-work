<?php
$user = (int) $_POST['user_num'];
echo "user:", $user, "<br>";
$com = mt_rand(1, 9);
echo "com:", $com , "<br>";
if ($user === $com) {
  echo "あたりです";
} else if ($user > $com) {
  echo "大きすぎます";
} else {
  echo "小さすぎます";
}
?>
<a href="index.php">もどる</a>


