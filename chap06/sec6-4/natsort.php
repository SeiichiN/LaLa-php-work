<?php
$data = ['image7', 'image12', 'image1'];
natsort($data);
$a = array_values($data);
print_r($a);

for ($i=0; $i < count($a); $i++) {
  echo $a[$i] . ' ';
}
