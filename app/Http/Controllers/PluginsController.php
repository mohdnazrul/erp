<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PluginsController extends Controller
{
    public function charts()
    {
        $title = "Charts";
        return view('documentation.plugins.charts', compact('title'));
    }
    public function datatable()
    {
        $title = "Datatable";
        return view('documentation.plugins.datatable', compact('title'));
    }

    public function DataRangpicker()
    {
        $title = "Data Range Picker";
        return view('documentation.plugins.data-rangpicker', compact('title'));
    }
    public function dropify()
    {
        $title = "Dropify";
        return view('documentation.plugins.dropify', compact('title'));
    }
    public function Inputmask()
    {
        $title = "Inputmask";
        return view('documentation.plugins.inputmask', compact('title'));
    }
    public function OwlCarousel()
    {
        $title = "Owl Carousel";
        return view('documentation.plugins.owl-carousel', compact('title'));
    }
    public function Sweetalert()
    {
        $title = "Sweetalert";
        return view('documentation.plugins.sweetalert', compact('title'));
    }
      public function TagsInput()
    {
        $title = "Tags Input";
        return view('documentation.plugins.tagsinput', compact('title'));
    }
      public function ImageInput()
    {
        $title = "Image Input";
        return view('documentation.plugins.imageinput', compact('title'));
    }
      public function PasswordMeter()
    {
        $title = "Password Meter";
        return view('documentation.plugins.passwordmeter', compact('title'));
    }
      public function jKanbanBoard()
    {
        $title = "jKanban Board";
        return view('documentation.plugins.jkanbanboard', compact('title'));
    }

}
