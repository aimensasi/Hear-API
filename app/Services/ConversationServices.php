<?php

namespace App\Services;

use App\Conversation;
use Illuminate\Http\Request;

class ConversationServices extends TransformerService {

	protected $messageServices;

	public function __construct(MessageServices $messageServices){
		$this->messageServices = $messageServices;
	}

	public function all(Request $request){
		$conversations = Conversation::where('owner_id', $request->user()->id)->orderBy('created_at', 'desc')->get();


		return $this->transformCollection($conversations);
	}

	public function show(Conversation $conversation){
		$result = $this->transform($conversation);

		$result['messages'] = $this->messageServices->transformCollection($conversation->messages);
		return $result;
	}

	public function store(Request $request){
		$conversation = Conversation::create([
			'owner_id' => $request->user()->id,
			'name' => "New conversation"
		]);

		return $this->transform($conversation);
	}

	public function update(Request $request, Conversation $conversation){
		$request->validate([
			'name' => 'required'
		]);

		$conversation->name = $request->name;
		$conversation->save();


		return $this->transform($conversation);
	}

	public function delete(Conversation $conversation){
		$conversation->delete();

		return success();
	}


  public function transform($conversation){
		return [
			"id" => $conversation->id,
			"name" => $conversation->name,
			"display_name" => $conversation->name . " " . date_to_human($conversation->created_at),
			"language" => $conversation->language ? $conversation->language : $conversation->owner->language,
			"created_at" => $conversation->created_at,
		];
	}
}
