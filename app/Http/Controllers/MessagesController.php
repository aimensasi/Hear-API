<?php

namespace App\Http\Controllers;

use App\Message;
use App\Conversation;
use Illuminate\Http\Request;
use App\Services\MessageServices;


class MessagesController extends Controller{


	protected $messageServices;

	public function __construct(MessageServices $messageServices){
		$this->messageServices = $messageServices;
	}

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Conversation  $conversation
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request, Conversation $conversation){
    return $this->messageServices->store($request, $conversation);
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Conversation  $conversation
   * @param  \App\Message  $message
   * @return \Illuminate\Http\Response
   */
  public function destroy(Conversation $conversation, Message $message){
    // TODO implement later if needed
  }
}
