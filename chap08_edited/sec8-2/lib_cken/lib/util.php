<?php
function cken(array|string $data) : bool {
  return mb_check_encoding($data);
}