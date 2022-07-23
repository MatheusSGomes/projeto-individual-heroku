<?php
use Illuminate\Support\Str;

function handleMoney($money) {
  $replace = Str::replace(',', '.', $money);
  $toFloat = floatval($replace);
  return $toFloat;
}