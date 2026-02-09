<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function analytics() {
        $title = "Analytics";
        return view('dashboard.my-dashboard.analytics', compact('title'));
    }
    
    public function projectsAnalytics() {
        $title = "Projects Analytics";
        return view('dashboard.my-dashboard.projects-analytics', compact('title'));
    }

    
    public function eventsAnalytics() {
        $title = "Events Analytics";
        return view('dashboard.my-dashboard.events-analytics', compact('title'));
    }

    
}
