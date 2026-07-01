@extends('layouts.app')

@section('content')

<div class="bg-white rounded-lg shadow-lg p-6">

    <h1 class="text-3xl font-bold text-blue-700 mb-6">
        Add Measurement
    </h1>

    <form method="POST" action="{{ route('measurements.store') }}">
        @csrf

        <!-- Customer -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Customer</label>

            <select name="customer_id" class="w-full border rounded p-3" required>
                <option value="">Select Customer</option>

                @foreach($customers as $customer)
                    <option value="{{ $customer->id }}">
                        {{ $customer->customer_name }}
                    </option>
                @endforeach

            </select>
        </div>

        <!-- Room -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Room</label>

            <input
                type="text"
                name="room"
                class="w-full border rounded p-3"
                placeholder="Kitchen"
                required>
        </div>

        <!-- Opening -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Opening Name</label>

            <input
                type="text"
                name="opening_name"
                class="w-full border rounded p-3"
                placeholder="Window 1"
                required>
        </div>

        <!-- Width -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Width (Metres)</label>

            <input
                type="number"
                step="0.01"
                name="width"
                class="w-full border rounded p-3"
                required>
        </div>

        <!-- Height -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Height (Metres)</label>

            <input
                type="number"
                step="0.01"
                name="height"
                class="w-full border rounded p-3"
                required>
        </div>

        <!-- Screen Type -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Screen Type</label>

            <select name="screen_type" class="w-full border rounded p-3" required>
                <option>Magnetic</option>
                <option>Velcro</option>
                <option>Retractable</option>
                <option>Pleated</option>
            </select>
        </div>

        <!-- Quantity -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">Quantity</label>

            <input
                type="number"
                name="quantity"
                value="1"
                min="1"
                class="w-full border rounded p-3">
        </div>

        <!-- Notes -->
        <div class="mb-6">
            <label class="block font-semibold mb-2">Notes</label>

            <textarea
                name="notes"
                rows="4"
                class="w-full border rounded p-3"
                placeholder="Optional notes..."></textarea>
        </div>

        <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded">
            Save Measurement
        </button>

    </form>

</div>

@endsection