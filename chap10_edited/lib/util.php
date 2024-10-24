<?php
function h(string $data) : mixed {
	return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

function check_enc(array|string $data) {
	if (!mb_check_encoding($data, 'UTF-8')) {
		$err = "Encoding Error! The expected encoding is UTF-8";
		exit($err);
	}
}

function print_error(array $errors) {
  echo '<ol class="error">';
    foreach ($errors as $value) {
      echo "<li>{$value}</li>";
    }
  echo '</ol>';
}

function move_to($url, $text) {
?>
  <form action="<?php echo $url; ?>" method="post">
    <ul>
      <li><input type="submit" value="<?php echo $text; ?>"></li>
    </ul>
  </form>
<?php
}

// p425 セッションを破棄する
function killSession() {
  $_SESSION = [];
  if (isset($_COOKIE[session_name()])) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time()-36000, $params['path']);
  }
  session_destroy();
}