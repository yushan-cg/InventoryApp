<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\View\View;

class OrderController extends Controller
{
    public function index(): view{
        $products = Product::all();
        $orders = Order::all();
        return view('orders', compact('orders', 'products'));
    }
}
