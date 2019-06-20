<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Conversation;
use Faker\Generator as Faker;

$factory->define(Conversation::class, function (Faker $faker) {
  return [
    "name" => $faker->colorName,
		"owner_id" => function(){
			return factory(App\User::class)->create()->id;
		}
  ];
});
