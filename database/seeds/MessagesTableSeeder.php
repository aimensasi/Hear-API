<?php

use Illuminate\Database\Seeder;

use App\Conversation;
use App\Message;

class MessagesTableSeeder extends Seeder{

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    Message::truncate();

		$conversations = Conversation::all();

		foreach ($conversations as $conversation) {
			factory(Message::class, 10)->create([
				"conversation_id" => $conversation->id,
				"owner_id" => $conversation->owner_id,
			]);
		}
  }
}
