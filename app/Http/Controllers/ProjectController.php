<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {
        $title = "Projects";
        return view('project.project', compact('title'));
    }

    public function projectDetails() {
        $title = "Project Details";
        return view('project.project-details', compact('title'));
    }
}
