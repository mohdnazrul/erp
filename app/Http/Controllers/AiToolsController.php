<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AiToolsController extends Controller
{
    public function aiChat() {
        $title = "AI Chat Assistant";
        return view('ai-tools.ai-chat', compact('title'));
    }

    public function aiFinder() {
        $title = "AI.TLD Finder";
        return view('ai-tools.ai-tld-finder', compact('title'));
    }

    public function aiWriter() {
        $title = "AI Writer Studio";
        return view('ai-tools.ai-writer', compact('title'));
    }
    
    public function aiImageGenerator() {
        $title = "AI Image Generator";
        return view('ai-tools.ai-image-generator', compact('title'));
    }

    public function aiModules() {
        $title = "AI Models";
        return view('ai-tools.ai-modules', compact('title'));
    }

    public function aiToolLibrary() {
        $title = "AI Models";
        return view('ai-tools.ai-tool-library', compact('title'));
    }
}
