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

