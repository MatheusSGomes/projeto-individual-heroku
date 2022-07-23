<?php
use Illuminate\Support\Str;

function handleMoney($money) {
  $replaceComma = Str::replace(',', '.', $money);
  $replaceRealSign = Str::replace('R$', '', $replaceComma);
  $toFloat = floatval($replaceRealSign);
  return $toFloat;
}

function formatMoney($money) {
  $clearComma = Str::replace('.', ',', $money);
  return "R$ ".$clearComma;
}