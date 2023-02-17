<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.admin', compact('products'));
    }
    public function create()
    {
        $categories = Category::all();
        return view('admin.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'price' => 'required',
            'count' =>'required',
            'category' => 'required'
        ]);

        $newImageName = time() . '-' . $request->file('image')->getClientOriginalName();

        $request->image->move(public_path('images'), $newImageName);

        $product = Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $newImageName,
            'price' => $request->input('price'),
            'count' => $request->input('count'),
            'category_id' => $request->input('category')
        ]);

        return to_route('admin')->with('success', 'Продукт '.$product->name.' успешно добавлен');;
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        $categories = Category::all();

        return view('admin.edit', compact('product','categories'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required',
            'price' => 'required',
            'count' => 'required',
            'category' => 'required'
        ]);

        $product = Product::findOrFail($id);

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->count = $request->input('count');
        $product->category_id = $request->input('category');

        if ($request->hasFile('image')) {
            $newImageName = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('images'), $newImageName);

            $product->image = $newImageName;
        }

        $product->save();

        return to_route('admin')->with('success', 'Продукт успешно обновлен');
    }
    public function destroy($id)
    {
        Product::destroy($id);

        return to_route('admin');
    }
}
