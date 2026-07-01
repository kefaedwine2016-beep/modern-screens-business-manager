<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display all products.
     */
    public function index()
    {
        $products = Product::latest()->get();

        return view('products.index', compact('products'));
    }

    /**
     * Show the Add Product form.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a new product.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'unit' => 'required',
            'selling_price' => 'required|numeric',
        ]);

        Product::create([
            'product_name' => $request->product_name,
            'unit' => $request->unit,
            'selling_price' => $request->selling_price,
            'description' => $request->description,
            'active' => $request->has('active'),
        ]);

        return redirect()
            ->route('products.index')
            ->with('success', 'Product added successfully.');
    }
}