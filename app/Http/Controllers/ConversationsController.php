<?php

namespace App\Http\Controllers;

use App\Conversation;
use Illuminate\Http\Request;
use App\Services\ConversationServices;

class ConversationsController extends Controller{

	protected $conversationServices;

	public function __construct(ConversationServices $conversationServices){
		$this->conversationServices = $conversationServices;
	}


  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Request $request){
    return $this->conversationServices->all($request);
  }


  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request){
		return $this->conversationServices->store($request);
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Conversation  $conversation
   * @return \Illuminate\Http\Response
   */
  public function show(Conversation $conversation){
		return $this->conversationServices->show($conversation);
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Conversation  $conversation
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Conversation $conversation){
    return $this->conversationServices->update($request, $conversation);
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Conversation  $conversation
   * @return \Illuminate\Http\Response
   */
  public function destroy(Conversation $conversation){
    return $this->conversationServices->delete($conversation);
  }
}
