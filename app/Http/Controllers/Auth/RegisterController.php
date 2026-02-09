<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        $title = 'Create an account';
        return view('auth.register', compact('title'));
    }

    public function verificationCode(){
        $title = 'Verify code';
        return view('auth.verification-code', compact('title'));
    }
}
