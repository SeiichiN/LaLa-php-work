<?php
$sugaku = 65;
$eigo = 37;
if ($sugaku >= 60) {
  if ($eigo >= 60) {
    echo "おめでとう！両方とも合格です！";
  } else {
    echo "残念、英語が不合格です。";
  }
} else {
  echo "残念、数学は不合格です。";
}