<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    // Validation rules for both store and update methods
    private $validationRules = [
        'ProductName' => 'required|string|max:255',
        'PartNumber' => 'required|string|max:255',
        'ProductLabel' => 'required|string|max:255',
        'StartingInventory' => 'required|integer',
        'InventoryReceived' => 'required|integer',
        'InventoryShipped' => 'required|integer', 
        'InventoryOnHand' => 'required|integer',
        'MinimumRequired' => 'required|integer',
    ];

    public function index(): View{
        $products = Product::all();
        return view('inventory', compact('products'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate($this->validationRules);
        Product::create($validated);
        return redirect()->route('index');
    }

    public function update(Request $request, Product $product): RedirectResponse
    {
        // Validate the incoming request data
        $validated = $request->validate($this->validationRules);

        // Update the product with the validated data
        $product->update($validated);
        
        // Redirect the user to the index page
        return redirect()->route('index');
    }

    public function destroy(Product $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('index');
    }
}
