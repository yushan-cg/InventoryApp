<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): view{
        $products = Product::all();
        return view('inventory', compact('products'));
    }
}
