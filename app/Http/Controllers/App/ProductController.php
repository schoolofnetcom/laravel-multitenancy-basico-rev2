<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('app.product.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('app.product.create', compact('categories'));
    }

    public function store(ProductRequest $request)
    {
        Product::create($request->all());
        return redirect()->route('app.products.index');
    }

    public function show(Product $product)
    {
        return view('app.product.show', compact('product'));
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('app.product.edit', compact('product', 'categories'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->fill($request->all());
        $product->save();
        return redirect()->route('app.products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('app.products.index');
    }
}
