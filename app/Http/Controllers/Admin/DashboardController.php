<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Organization;
use App\Models\OrgUnit;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'total_users' => User::count(),
            'active_users' => User::where('is_active', true)->count(),
            'total_organizations' => Organization::count(),
            'total_org_units' => OrgUnit::count(),
            'total_departments' => Department::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
