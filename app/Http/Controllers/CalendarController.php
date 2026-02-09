<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function calendar() {
        $title = "Calender";
        return view('calendar.calendar', compact('title'));
    }
}
