<?php
$couponList = ["nf23qw"=>0.75, "ha45as"=>0.8, "hf56zx"];
$priceList = ["ax101"=>2300, "ax102"=>2900];

function getCouponRate($code) {
  global $couponList;
  // $codeが$couponListの中にあれば true
  $isCouponCode = array_key_exists($code, $couponList);
  if ($isCouponCode) {
    return $couponList[$code];
  } else {
    return NULL;
  }
}

// var_dump(getCouponRate("nf23qws"));  # NULL

function getPrice($id) {
  global $priceList;
  $isGoodsId = array_key_exists($id, $priceList);
  if ($isGoodsId) {
    return $priceList[$id];
  } else {
    return NULL;
  }
}

// var_dump(getPrice("ax101s"));