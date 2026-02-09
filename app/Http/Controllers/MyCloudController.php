<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCloudController extends Controller
{
    public function myCloud() {
        $title = "My Cloud";
        return view('my-cloud.my-cloud', compact('title'));
    }
}
