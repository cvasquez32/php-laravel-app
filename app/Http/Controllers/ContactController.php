<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMessageRequest;
use App\Models\Message;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  public function showMessage(): View
  {
    return view('messages', ['messages' => Message::all()]);
  }

  public function showForm(): View
  {
    return view('contact');
  }

  public function storeMessage(StoreMessageRequest $request)
  {
    Message::create([
      'sender_name' => $request->input('name'),
      'sender_email' => $request->input('email'),
      'message' => $request->input('message'),
    ]);

    return redirect('/messages');
  }
}
