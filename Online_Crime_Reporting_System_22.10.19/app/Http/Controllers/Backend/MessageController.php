<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;

class MessageController extends Controller
{
    public function message()
    {
        $messages = Message::all();
        return view('backend.pages.message.messageList',compact('messages'));
    }


    public function action_update($id)
    {
        $messages = Message::find($id);

        $messages->update([
            'status' => 'SEEN'
        ]);

        return redirect()->back();
    }
}
