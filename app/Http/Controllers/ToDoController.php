<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoController extends Controller
{
    public function index() {
        $title = "MY TODO";
        return view('todo.todo', compact('title'));
    }
}
