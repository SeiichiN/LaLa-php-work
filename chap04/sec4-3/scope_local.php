<?php
function price($kosu) {
  $ryoukin = 250 * $kosu;
  echo "$ryoukin 円です";
}

$ko = 2;
echo "$ko 個で";
price($ko);

