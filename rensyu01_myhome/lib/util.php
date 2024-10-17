<?php
function h(string $data) : mixed {
	return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function check_enc(array|string $data) {
	if (!mb_check_encoding($data)) {
		$err = "Encoding Error! The expected encoding is UTF-8";
		exit($err);
	}
}

function validate_name(&$isError) {
  $name = $_POST['name'];
  // 全角英数文字、全角空白を半角にする
  // $name = mb_convert_kana($name, "as");
  $name = trim($name);
  // 文字長チェック
  if ($name === '') {
    $isError = true;
  }
  return $name;
}

// 修正時刻: Fri 2024/10/18 07:27:47
