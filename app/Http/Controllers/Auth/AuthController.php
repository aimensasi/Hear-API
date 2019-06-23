<?php

namespace App\Http\Controllers\Auth;

use App\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller{


	public function register(Request $request){
		$data = $request->validate([
			'email' => 'required|unique:users|max:255',
			'password' => 'required|min:6'
		]);

		$user = User::create($data);

		return success();
	}
}
