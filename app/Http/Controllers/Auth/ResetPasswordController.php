<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    public function index(){
        $title = 'Forgot password?';
        return view('auth.forgot-password', compact('title'));
    }
}
