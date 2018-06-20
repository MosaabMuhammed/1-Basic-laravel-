<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessagesController extends Controller
{
    public function store(Request $request){
        $this->validate($request, [
            'name'      => 'required',
            'email'     => 'required'
        ]);

        return redirect()->route('contact');
    }
}
