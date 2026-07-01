@extends('layouts.app')

@section('content')

<div class="bg-white rounded-lg shadow-lg p-6">

    <div class="flex justify-between items-center mb-6">

        <h1 class="text-3xl font-bold text-blue-700">
            Products
        </h1>

        <a href="{{ route('products.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">
            + Add Product
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
                <th class="border p-3">Product</th>
                <th class="border p-3">Unit</th>
                <th class="border p-3">Selling Price</th>
                <th class="border p-3">Status</th>
            </tr>
        </thead>

        <tbody>

        @forelse($products as $product)

            <tr>
                <td class="border p-3">{{ $product->product_name }}</td>
                <td class="border p-3">{{ $product->unit }}</td>
                <td class="border p-3">KSh {{ number_format($product->selling_price, 2) }}</td>
                <td class="border p-3">
                    @if($product->active)
                        <span class="text-green-600 font-semibold">Active</span>
                    @else
                        <span class="text-red-600 font-semibold">Inactive</span>
                    @endif
                </td>
            </tr>

        @empty

            <tr>
                <td colspan="4" class="border p-3 text-center">
                    No products found.
                </td>
            </tr>

        @endforelse

        </tbody>

    </table>

</div>

@endsection