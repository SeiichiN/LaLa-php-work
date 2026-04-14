<?php
$kosu = 2;
function price() {
  $ryoukin = 250 * $kosu;
  echo "{$ryoukin}円です。";
}
echo "{$kosu}個で";
price();
