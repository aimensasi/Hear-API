<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model{


	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'owner_id', 'name', 'language'
	];


	public function owner(){
		return $this->belongsTo('App\User', 'owner_id');
	}

}
