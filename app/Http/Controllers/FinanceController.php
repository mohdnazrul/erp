<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function invoicing() {
        $title = "Invoices";
        return view('dashboard.finance.invoicing', compact('title'));
    }

    public function createInvoice() {
        $title = "Create Invoice";
        return view('dashboard.finance.create-invoice', compact('title'));
    }

    public function Expenses() {
        $title = "Expenses";
        return view('dashboard.finance.expenses', compact('title'));
    }
}
