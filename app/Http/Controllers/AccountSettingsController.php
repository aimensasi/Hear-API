<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountSettingsController extends Controller{

	public function currentUser(Request $request){
		$current_user = $request->user();
		$token = \DB::table("oauth_access_tokens")->where("user_id", $current_user->id)->select("expires_at")->first();
		return [
			"email" => $current_user->email,
			"language" => $current_user->language,
			"token" => $token,
		];
	}


	public function settings(Request $request){
		$current_user = $request->user();
		if ($request->has('language') && $current_user->language != $request->language) {
			$current_user->language = $request->language;
		}

		if ($request->has("current_password") && $request->current_password != '') {
			$request->validate([
				"current_password" => "required|min:6",
				"password" => "required|confirmed|min:6",
			]);

			$current_user->password = Hash::make($request->password);
		}

		$current_user->save();

		return success();
	}
}
