<?php
function numbermask($subject)
{
  $pattern = "/^\d{4}\s?\d{4}\s?\d{4}\s?\d{2}(\d{2})$/";
  $replacement = "**** **** **** **$1";
  $result = preg_replace($pattern, $replacement, $subject);
  if (is_null($result)) {
    return "エラー: " . preg_last_error();
  } else if ($result === $subject) {
    return "番号エラー";
  } else {
    return $result;
  }
}

$number1 = "1234 5678 9012 3456";
$number2 = "6543210987654321";
$num1 = numbermask($number1);
$num2 = numbermask($number2);
echo "{$number1}はこのようになります。<br>\n";
echo $num1, "<br>\n";
echo "{$number1}はこのようになります。<br>\n";
echo $num2, "<br>\n";
