<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email() {
        $title = "My Inbox";
        return view('email.email', compact('title'));
    }
}
