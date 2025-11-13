<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\Messaging;

class MessageController extends Controller
{
    //

    public function store(Request $request){
        $message = $group->message()->create([

        ]);
    }

}
