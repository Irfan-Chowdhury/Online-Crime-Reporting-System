<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    public function message()
    {
        return view('frontend.user.pages.message.message');
    }

    public function store(Request $request)
    {
        //--------------------------- validation -----------------------------
        $validator= Validator::make($request->all(),[
            'subject'      => 'required|max:80',
            'message'      => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $message = New Message();

        $message->create([
            'user_id'   => Auth::user()->id,
            'subject'   => $request->input('subject'),
            'message'   => $request->input('message'),
            'roll'      => 'user'
        ]);

        session()->flash('type','success');
        session()->flash('message','Message Sent Successfully.');
        
        return redirect()->back();
    }
}
