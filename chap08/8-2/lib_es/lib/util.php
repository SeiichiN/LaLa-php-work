<?php
function es(array|string $data): mixed {
  if (is_array($data)) {
    return array_map('es', $data);
  } else {
    return htmlspecialchars($data, ENT_QUOTES, "UTF-8");
  }
}