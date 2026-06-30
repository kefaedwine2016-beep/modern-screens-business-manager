@extends('layouts.app')

@section('content')

<h1 class="text-3xl font-bold text-blue-700 mb-8">
    Dashboard
</h1>

<!-- Statistics Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">

    <div class="bg-white rounded-lg shadow-lg p-6">
        <p class="text-gray-500 text-sm">Customers</p>
        <h2 class="text-4xl font-bold text-blue-700 mt-2">
            {{ $totalCustomers }}
        </h2>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6">
        <p class="text-gray-500 text-sm">Quotations</p>
        <h2 class="text-4xl font-bold text-green-600 mt-2">0</h2>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6">
        <p class="text-gray-500 text-sm">Installations</p>
        <h2 class="text-4xl font-bold text-orange-500 mt-2">0</h2>
    </div>

    <div class="bg-white rounded-lg shadow-lg p-6">
        <p class="text-gray-500 text-sm">Revenue</p>
        <h2 class="text-3xl font-bold text-purple-600">
            KSh 0
        </h2>
    </div>

</div>

<!-- Recent Customers -->
<div class="bg-white rounded-lg shadow-lg p-6">

    <h2 class="text-2xl font-bold text-gray-700 mb-4">
        Recent Customers
    </h2>

    <table class="w-full border border-gray-300">

        <thead class="bg-gray-200">
            <tr>
                <th class="border p-3">Name</th>
                <th class="border p-3">Phone</th>
                <th class="border p-3">Location</th>
            </tr>
        </thead>

        <tbody>

        @forelse($recentCustomers as $customer)

            <tr>
                <td class="border p-3">{{ $customer->customer_name }}</td>
                <td class="border p-3">{{ $customer->phone }}</td>
                <td class="border p-3">{{ $customer->location }}</td>
            </tr>

        @empty

            <tr>
                <td colspan="3" class="border p-3 text-center text-gray-500">
                    No customers found.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection