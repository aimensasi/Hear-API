<?php

function directory_path($key){
  return Config::get($key) . '/';
}


// get user avatar
function avatar_picture_url($avatar){
	$path = directory_path('storage.avatars') . '/' . $avatar;

	if (Storage::exists($path) && $avatar != null) {
		return Storage::url($path);
	}
	return asset('/images/avatar.jpg');
}


function getFileExtention($file){
	return $file->getClientOriginalExtension();
}

// produce unique name for the file
function get_file_name($file){
	$file_name = $file->getClientOriginalName();
	$file_ext = getFileExtention($file);

	$file_name = str_replace('.' . $file_ext, '', $file_name);
	// Hash a unique name for the file
	$file_unique_name = md5($file_name . time()) . '.' . $file_ext;

	return $file_unique_name;
}
