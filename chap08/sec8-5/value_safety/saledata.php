<?php
$couponList = [
  "nr23qw" => 0.75,
  "ha45as" => 0.8,
  'hf56zx' => 0.85,
];
$priceList = [
  'ax101' => 2300,
  'ax102' => 2900,
];

// $code = 'hf56zx' ==> 0.85 がリターンされる
// $code = 'abc34x' ==> NULL がリターンされる
function getCouponRate($code) {
  global $couponList;
  $isCouponCode = array_key_exists($code, $couponList);
  if ($isCouponCode) {
    return $couponList[$code];
  } else {
    return NULL;
  }
}
// $id = 'ax103' ==> NULLがリターンされる
function getPrice($id) {
  global $priceList;
  $isGoodsID = array_key_exists($id, $priceList);
  if ($isGoodsID) {
    return $priceList[$id];
  } else {
    return NULL;
  }
}