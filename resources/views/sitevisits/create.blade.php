@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto">

    <div class="bg-white rounded-lg shadow-lg p-8">

        <h1 class="text-3xl font-bold text-blue-700 mb-2">
            New Site Visit
        </h1>

        <p class="text-gray-500 mb-8">
            Create a new site visit before measuring the property.
        </p>

        <form method="POST" action="{{ route('sitevisits.store') }}">

            @csrf

            <!-- Customer -->

            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Customer
                </label>

                <select
                    name="customer_id"
                    class="w-full border rounded-lg p-3"
                    required>

                    <option value="">
                        Select Customer
                    </option>

                    @foreach($customers as $customer)

                        <option value="{{ $customer->id }}">
                            {{ $customer->customer_name }}
                        </option>

                    @endforeach

                </select>

            </div>

            <!-- Visit Date -->

            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Visit Date
                </label>

                <input
                    type="date"
                    name="visit_date"
                    value="{{ date('Y-m-d') }}"
                    class="w-full border rounded-lg p-3"
                    required>

            </div>

            <!-- Property Name -->

            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Property Name
                </label>

                <input
                    type="text"
                    name="property_name"
                    class="w-full border rounded-lg p-3"
                    placeholder="Example: John Mwangi Residence"
                    required>

            </div>

            <!-- Estate -->

            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Estate / Location
                </label>

                <input
                    type="text"
                    name="estate"
                    class="w-full border rounded-lg p-3"
                    placeholder="Example: Green Park Estate">

            </div>

            <!-- Technician -->

            <div class="mb-5">

                <label class="block font-semibold mb-2">
                    Technician
                </label>

                <input
                    type="text"
                    name="technician"
                    value="Kefa"
                    class="w-full border rounded-lg p-3"
                    required>

            </div>

            <!-- Notes -->

            <div class="mb-6">

                <label class="block font-semibold mb-2">
                    Notes
                </label>

                <textarea
                    name="notes"
                    rows="4"
                    class="w-full border rounded-lg p-3"
                    placeholder="Special instructions, pets, security gate, customer requests..."></textarea>

            </div>

            <div class="flex justify-end">

                <button
                    type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg">

                    Create Site Visit

                </button>

            </div>

        </form>

    </div>

</div>

@endsection