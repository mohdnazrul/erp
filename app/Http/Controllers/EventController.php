<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $title = "My Events";
        return view('events.events', compact('title'));
    }
}
