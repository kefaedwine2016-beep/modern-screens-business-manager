<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use App\Models\Measurement;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    /**
     * Display all measurements.
     */
    public function index()
    {
        $measurements = Measurement::with(['customer', 'product'])
            ->latest()
            ->get();

        return view('measurements.index', compact('measurements'));
    }

    /**
     * Show the Add Measurement form.
     */
    public function create()
    {
        $customers = Customer::orderBy('customer_name')->get();
        $products = Product::where('active', true)
            ->orderBy('product_name')
            ->get();

        return view('measurements.create', compact('customers', 'products'));
    }

    /**
     * Store a new measurement.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'product_id' => 'required|exists:products,id',
            'room' => 'required',
            'opening_name' => 'required',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'quantity' => 'required|integer|min:1',
        ]);

        $product = Product::findOrFail($request->product_id);

        $area = $request->width * $request->height;

        $totalPrice = $area * $product->selling_price * $request->quantity;

        Measurement::create([
            'customer_id' => $request->customer_id,
            'product_id' => $request->product_id,
            'room' => $request->room,
            'opening_name' => $request->opening_name,
            'width' => $request->width,
            'height' => $request->height,
            'area' => $area,
            'quantity' => $request->quantity,
            'total_price' => $totalPrice,
            'notes' => $request->notes,
        ]);

        return redirect()
            ->route('measurements.index')
            ->with('success', 'Measurement saved successfully.');
    }
}