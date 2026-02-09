<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountSettingController extends Controller
{
    public function index(){
        $title = "Account Settings";
        return view('account-setting', compact('title'));
    }
}
