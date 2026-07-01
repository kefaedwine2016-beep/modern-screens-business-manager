@extends('layouts.app')

@section('content')

<div class="bg-white rounded-lg shadow-lg p-6">

    <h1 class="text-3xl font-bold text-blue-700 mb-6">
        Add Product
    </h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf

        <!-- Product Name -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">
                Product Name
            </label>

            <input
                type="text"
                name="product_name"
                class="w-full border rounded p-3"
                placeholder="Magnetic Screen"
                required>
        </div>

        <!-- Unit -->
        <div class="mb-4">
            <label class="block font-semibold mb-2">
                Unit
            </label>

            <select
                name="unit"
                class="w-full border rounded p-3"
                required>

                <option value="">Select Unit</option>
                <option value="m²">Square Metre (m²)</option>
                <option value="Piece">Piece</option>
                <option value="Metre">Metre</option>

            </select>

        </div>

        <!-- Selling Price -->
        <div class="mb-4">

            <label class="block font-semibold mb-2">
                Selling Price (KSh)
            </label>

            <input
                type="number"
                step="0.01"
                name="selling_price"
                class="w-full border rounded p-3"
                required>

        </div>

        <!-- Description -->
        <div class="mb-4">

            <label class="block font-semibold mb-2">
                Description
            </label>

            <textarea
                name="description"
                rows="4"
                class="w-full border rounded p-3"
                placeholder="Optional description"></textarea>

        </div>

        <!-- Active Product -->
        <div class="mb-6">

            <label class="flex items-center">

                <input
                    type="checkbox"
                    name="active"
                    checked
                    class="mr-2">

                Active Product

            </label>

        </div>

        <button
            type="submit"
            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded">

            Save Product

        </button>

    </form>

</div>

@endsection