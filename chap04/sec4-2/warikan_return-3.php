<?php
function warikan($total=2000, $ninzu=2) {
  if ($ninzu <= 0) {
    return;
  }
  $result = $total / $ninzu;
  echo "{$total}円を{$ninzu}人で分けると{$result}円。";;
  echo "<br>" . PHP_EOL;
}

warikan(ninzu:4);



