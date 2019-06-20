<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Message;
use Faker\Generator as Faker;

$factory->define(Message::class, function (Faker $faker) {
  return [
		"conversation_id" => function(){
			return factory(App\Conversation::class)->create()->id;
		},
		"owner_id" => function(){
			return factory(App\User::class)->create()->id;
		},
    "message" => $faker->paragraph(5)
  ];
});
