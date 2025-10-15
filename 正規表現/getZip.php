<?php
$zip = $_POST['zip']; // 123-4567

$pattern = "/^\d{3}-?\d{4}$/";
$result = preg_match($pattern, $zip);

if ($result) {
  echo "正しい形式です";
} else {
  echo "不正な形式です";
}
?>
<p><a href="index.php">もどる</a></p>
