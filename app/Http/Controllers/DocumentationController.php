<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    public function documentation() {
        $title = "Documentation";
        return view('documentation.doc.documentation', compact('title'));
    }

    public function components() {
        $title = "Components";
        return view('documentation.doc.components', compact('title'));
    }

    public function widgets() {
        $title = "Widgets";
        return view('documentation.doc.widgets', compact('title'));
    }

    public function help() {
        $title = "Need a Help?";
        $headTitle = "Help";
        return view('documentation.doc.help', compact('title', 'headTitle'));
    }
}
