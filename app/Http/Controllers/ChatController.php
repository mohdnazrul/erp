<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function chat() {
        $title = "My Chat";
        return view('chat.chat', compact('title'));
    }
}
