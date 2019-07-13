<?php

namespace App\Services;

use App\Message;
use App\Conversation;
use Illuminate\Http\Request;

class MessageServices extends TransformerService {


	public function store(Request $request, Conversation $conversation){
		$request->validate([
			"message" => "required"
		]);

		$message = Message::create([
			"message" => $request->message,
			"conversation_id" => $conversation->id,
		]);

		if ($request->mine == true) {
			$message->owner_id = $conversation->owner_id;
			$message->save();
		}

		return $this->transform($message);
	}


	public function transform($message){
		return [
			"id" => $message->id,
			"message" => $message->message,
			"mine" => $message->owner ? true : false,
			"created_at" => $message->created_at,
		];
	}
}
