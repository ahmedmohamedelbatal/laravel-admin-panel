<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {
        return view('products.create');
    }
    public function store(Request $request) {
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_category' => 'required',
            'product_description' => 'required',
            'product_image' => 'required|image',
        ]);

        $image = $request->file('product_image')->getClientOriginalName();
        $path = $request->file('product_image')->storeAs('products', $image, 'public_path');
        Product::create([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_category' => $request->product_category,
            'product_description' => $request->product_description,
            'product_image' => $path,
        ]);
        return redirect()->route('products.index');
    }

    public function edit(int $id) {
        $product = Product::findorFail($id);
        return view('products.edit', compact('product'));
    }
    public function update(Request $request, int $id) {
        $product = Product::findorFail($id);
        
        $request->validate([
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_category' => 'required',
            'product_description' => 'required',
            'product_image' => 'required|image',
        ]);
        
        $image = $request->file('product_image')->getClientOriginalName();
        $path = $request->file('product_image')->storeAs('products', $image, 'public_path');
        $product->update([
            'product_name' => $request->product_name,
            'product_price' => $request->product_price,
            'product_category' => $request->product_category,
            'product_description' => $request->product_description,
            'product_image' => $path,
        ]);
        return redirect()->route('products.index');
    }

    public function destroy(int $id) {
        Product::findorFail($id)->delete();
        return redirect()->route('products.index');
    }
}
