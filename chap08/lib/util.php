<?php
function es(array|string $data): mixed {
  if (is_array($data)) {
    return array_map('es', $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, "UTF-8");
  }
}

// $data -- $_POST, $_GET を想定している
function cken(array $data): bool {
  return mb_check_encoding($data, "UTF-8");
}