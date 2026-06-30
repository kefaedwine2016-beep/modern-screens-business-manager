<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display all customers.
     */
    public function index()
    {
        $customers = Customer::orderBy('id', 'desc')->get();

        return view('customers.index', compact('customers'));
    }

    /**
     * Show the Add Customer form.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Save a new customer.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|max:255',
            'phone' => 'required|max:20',
            'email' => 'nullable|email',
            'address' => 'required|max:255',
            'location' => 'nullable|max:255',
        ]);

        Customer::create([
            'customer_name' => $request->customer_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'location' => $request->location,
        ]);

        return redirect()
            ->route('customers.index')
            ->with('success', 'Customer added successfully.');
    }
}