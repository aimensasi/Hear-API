<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model{

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'conversation_id', 'owner_id', 'message'
	];


	public function conversation(){
		return $this->belongsTo('App\Conversation');
	}

	public function owner(){
		return $this->belongsTo('App\User', 'owner_id');
	}
}
