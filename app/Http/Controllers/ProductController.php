<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $title = "My Product";
        return view('my-product.product.product-list', compact('title'));
    }

    public function addProduct(){
        $title = "Add Product";
        return view('my-product.product.add-product', compact('title'));
    }
}
