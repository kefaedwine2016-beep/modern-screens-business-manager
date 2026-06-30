<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class DashboardController extends Controller
{
    /**
     * Display the dashboard.
     */
    public function index()
    {
        // Count all customers
        $totalCustomers = Customer::count();

        // Get the latest 5 customers
        $recentCustomers = Customer::latest()->take(5)->get();

        return view('dashboard', compact(
            'totalCustomers',
            'recentCustomers'
        ));
    }
}