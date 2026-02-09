<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $title = "Dashboard";
        return view('home', compact('title'));
    }

    public function onepage() {
        $title = "Onepage";
        return view('onepage', compact('title'));
    }
}
