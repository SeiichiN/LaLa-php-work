<?php
function get_zip(array &$errors) {
  $zip = '';
  if (isset($_POST['zip'])) {
    $zip = trim($_POST['zip']);
    $pattern = "/^[0-9]{3}-[0-9]{4}$/";
    if (!preg_match($pattern, $zip)) {
      $errors[] = "郵便番号を正しく入力してください";
    }
  } else {
    $errors[] = "郵便番号が未設定です";
  }
  return $zip;
}