<?php

use Illuminate\Database\Seeder;
use App\Conversation;

class ConversationsTableSeeder extends Seeder{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(){
    Conversation::truncate();

		factory(Conversation::class, 20)->create();
  }
}
