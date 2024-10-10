<?php
function warikan($total, $ninzu) {
  if ($ninzu <= 0) {
    return;
  }
  $result = $total / $ninzu;
  return "{$total}円を{$ninzu}人で分けると{$result}円。<br>" . PHP_EOL;
}

echo warikan(2500, 2);
echo warikan(3000, 0);
echo warikan(5500, 4);

