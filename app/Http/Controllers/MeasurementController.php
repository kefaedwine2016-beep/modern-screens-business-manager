<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Measurement;
use Illuminate\Http\Request;

class MeasurementController extends Controller
{
    /**
     * Display all measurements.
     */
    public function index()
    {
        $measurements = Measurement::with('customer')->latest()->get();

        return view('measurements.index', compact('measurements'));
    }

    /**
     * Show the Add Measurement form.
     */
    public function create()
    {
        $customers = Customer::orderBy('customer_name')->get();

        return view('measurements.create', compact('customers'));
    }

    /**
     * Store a new measurement.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'room' => 'required',
            'opening_name' => 'required',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'screen_type' => 'required',
            'quantity' => 'required|integer|min:1',
        ]);

        Measurement::create($request->all());

        return redirect()
            ->route('measurements.index')
            ->with('success', 'Measurement added successfully.');
    }
}