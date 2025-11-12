<?php

namespace App\Http\Controllers;

use App\Events\Messaging;
use Illuminate\Http\Request;

class ChatController extends Controller
{

    public function sendMessage(Request $request){
        $user = auth()->user();
        $message = $request->input('message');

        Messaging::dispatch($user, $message);

        return response()->json(['status' => 'Message Sent!']);

    }

}
