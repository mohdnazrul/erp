<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EcommerceController extends Controller
{
    public function ecommerceAnalytics() {
        $title = "Ecommerce Analytics";
        return view('dashboard.ecommerce.ecommerce-analytics', compact('title'));
    }

    
    public function ecommerceCustomers() {
        $title = "Customer List";
        return view('dashboard.ecommerce.ecommerce-customers', compact('title'));
    }

    public function ecommerceComments() {
        $title = "Customers Comments";
        return view('dashboard.ecommerce.ecommerce-comments', compact('title'));
    }

    
    public function ecommerceTransactions() {
        $title = "Customers Transactions";
        return view('dashboard.ecommerce.ecommerce-transactions', compact('title'));
    }
}
