<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create() {
        return view('categories.create');
    }
    public function store(Request $request) {
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_description' => 'required',
            'category_image' => 'required|image',
        ]);

        $image = $request->file('category_image')->getClientOriginalName();
        $path = $request->file('category_image')->storeAs('categories', $image, 'public_path');
        Category::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'category_image' => $path,
        ]);
        return redirect()->route('categories.index');
    }

    public function edit(int $id) {
        $category = Category::findorFail($id);
        return view('categories.edit', compact('category'));
    }
    public function update(Request $request, int $id) {
        $category = Category::findorFail($id);
        
        $request->validate([
            'category_name' => 'required|unique:categories',
            'category_description' => 'required',
            'category_image' => 'required|image',
        ]);
        
        $image = $request->file('category_image')->getClientOriginalName();
        $path = $request->file('category_image')->storeAs('categories', $image, 'public_path');
        $category->update([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
            'category_image' => $path,
        ]);
        return redirect()->route('categories.index');
    }

    public function destroy(int $id) {
        Category::findorFail($id)->delete();
        return redirect()->route('categories.index');
    }
}
