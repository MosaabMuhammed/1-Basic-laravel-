<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function store(Request $request){
        $this->validate( request(), [
            'name'      => 'required',
            'email'     => 'required'
        ]);

        // store the data in the database
        // Message::create([
        //     'name'      => request('name'),
        //     'email'     => request('email'),
        //     'message'   => request('message')
        // ]);
        $message = new Message;
        $message->name = request('name');
        $message->email = request('email');
        $message->message = request('message');

        // Save the date
        $message->save();


        return redirect()->route('home')->with('success', 'Message was sent!');
    }

    public function show(){
        $messages = Message::all();

        return view('/messages', compact('messages'));
    }
}
