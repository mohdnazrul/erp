<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        $title = 'Sign In';
        return view('auth.login', compact('title'));
    }

    public function logout(Request $request)
    {
        Auth::logout(); // logout user

        // invalidate session + regenerate token (avoid session/csrf issues)
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login'); // /sign-in
    }
}
