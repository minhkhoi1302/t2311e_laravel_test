<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'ProductType' => 'required|regex:/^[A-Za-z0-9]{3}$/',
        'ProductCode' => 'required|regex:/^[A-Za-z0-9]{6}$/',
    ]);

    Product::create($request->all());

    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}
public function index()
{
    $products = Product::all();
    return view('products.index', ['products' => $products]);
}
}
