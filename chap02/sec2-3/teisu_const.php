<?php
const TAX = 0.08;
$price = 1250 * (1+TAX);
echo $price;
echo "<br>";

define("TAX2", 0.09);
$price2 = 1250 * (1+TAX2);
echo $price2;
