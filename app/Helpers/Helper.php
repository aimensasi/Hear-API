<?php

use App\User;
use Carbon\Carbon;


function current_user(){
  return Auth::user();
}

function is_active($path, $class = 'active'){
  return Request::is('*' . $path . '*') ? 'active' :  '';
}


function date_to_human($date, $format = 'd/m/Y, h:i A'){
	if ($date == null) {
		return '';
	}
	$dt = Carbon::parse($date);
	return $dt->format($format);
}

function generateUniqueToken(){
	return md5('verification' . time() . 'token');
}


function currency(){
	return session('currency');
}

function currency_is($currency = 'MYR'){
	return currency() == $currency;
}


/**
*
* Moving file from the temp folder to the destination folder
*
**/
function moveFileTo($filename, $destination){
	Storage::move('temp/' . $filename, $destination . '/' . $filename);

	return $filename;
}
