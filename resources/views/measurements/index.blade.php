@extends('layouts.app')

@section('content')

<div class="bg-white rounded-lg shadow-lg p-6">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-blue-700">
            Measurements
        </h1>

        <a href="{{ route('measurements.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">
            + Add Measurement
        </a>

    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full border border-gray-300">

        <thead class="bg-gray-200">
            <tr>
                <th class="border p-3">Customer</th>
                <th class="border p-3">Room</th>
                <th class="border p-3">Opening</th>
                <th class="border p-3">Width</th>
                <th class="border p-3">Height</th>
                <th class="border p-3">Screen Type</th>
                <th class="border p-3">Qty</th>
            </tr>
        </thead>

        <tbody>

        @forelse($measurements as $measurement)

            <tr>
                <td class="border p-3">{{ $measurement->customer->customer_name }}</td>
                <td class="border p-3">{{ $measurement->room }}</td>
                <td class="border p-3">{{ $measurement->opening_name }}</td>
                <td class="border p-3">{{ $measurement->width }}</td>
                <td class="border p-3">{{ $measurement->height }}</td>
                <td class="border p-3">{{ $measurement->screen_type }}</td>
                <td class="border p-3">{{ $measurement->quantity }}</td>
            </tr>

        @empty

            <tr>
                <td colspan="7" class="border p-3 text-center">
                    No measurements found.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection