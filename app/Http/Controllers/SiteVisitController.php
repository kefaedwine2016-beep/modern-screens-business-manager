<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\SiteVisit;
use Illuminate\Http\Request;

class SiteVisitController extends Controller
{
    /**
     * Display all site visits.
     */
    public function index()
    {
        $siteVisits = SiteVisit::with('customer')
            ->latest()
            ->get();

        return view('sitevisits.index', compact('siteVisits'));
    }

    /**
     * Show the Create Site Visit form.
     */
    public function create()
    {
        $customers = Customer::orderBy('customer_name')->get();

        return view('sitevisits.create', compact('customers'));
    }

    /**
     * Store a new Site Visit.
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id'   => 'required|exists:customers,id',
            'visit_date'    => 'required|date',
            'property_name' => 'required|max:255',
            'estate'        => 'nullable|max:255',
            'technician'    => 'required|max:255',
            'notes'         => 'nullable',
        ]);

        // Generate visit number
        $visitNumber = 'MS-' . date('Y') . '-' . str_pad(
            SiteVisit::count() + 1,
            5,
            '0',
            STR_PAD_LEFT
        );

        SiteVisit::create([
            'customer_id'   => $request->customer_id,
            'visit_number'  => $visitNumber,
            'visit_date'    => $request->visit_date,
            'property_name' => $request->property_name,
            'estate'        => $request->estate,
            'technician'    => $request->technician,
            'status'        => 'Scheduled',
            'notes'         => $request->notes,
        ]);

        return redirect()
            ->route('sitevisits.index')
            ->with('success', 'Site Visit created successfully.');
    }
}