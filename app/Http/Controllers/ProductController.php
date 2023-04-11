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
        return view('products.index');
    }

    public function create() {
        return view('products.create');
    }

    public function store(Request $request) {
        //   
    }

    public function edit(int $id) {
        return view('products.edit');
    }

    public function update(Request $request, int $id) {
        //
    }

    public function destroy(int $id) {
        //
    }
}
