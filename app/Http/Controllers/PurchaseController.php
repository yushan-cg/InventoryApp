<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Purchase;
use Illuminate\View\View;

class PurchaseController extends Controller
{
    public function index(): view{
        $products = Product::all();
        $purchases = Purchase::all();
        return view('purchases', compact('purchases', 'products'));
    }
}
