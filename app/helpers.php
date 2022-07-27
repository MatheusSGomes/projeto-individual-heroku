<?php
use Illuminate\Support\Str;

function handleMoney($money) 
{
  $replaceComma = Str::replace(',', '.', $money);
  $replaceRealSign = Str::replace('R$', '', $replaceComma);
  $toFloat = floatval($replaceRealSign);
  return $toFloat;
}

function formatMoney($money) 
{
  $clearComma = Str::replace('.', ',', $money);
  return "R$ ".$clearComma;
}

function formatToWhatsapp($phone)
{
  $replaceDash = Str::replace('-', '', $phone);
  $phone = Str::replace(' ', '', $replaceDash);

  if(!Str::startsWith($phone, '55')){
    $phone = 55 . $phone;
  }

  return "https://api.whatsapp.com/send?phone=".$phone;
}