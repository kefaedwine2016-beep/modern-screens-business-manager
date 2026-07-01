@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto">

    <h1 class="text-3xl font-bold text-blue-700 mb-6">
        Add Measurement
    </h1>

    <form method="POST" action="{{ route('measurements.store') }}">

        @csrf

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- LEFT SIDE -->
            <div class="bg-white rounded-lg shadow-lg p-6">

                <div class="mb-4">

                    <label class="font-semibold block mb-2">
                        Customer
                    </label>

                    <select
                        name="customer_id"
                        class="w-full border rounded p-3"
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

                <div class="mb-4">

                    <label class="font-semibold block mb-2">
                        Product
                    </label>

                    <select
                        id="product"
                        name="product_id"
                        class="w-full border rounded p-3"
                        required>

                        <option value="">
                            Select Product
                        </option>

                        @foreach($products as $product)

                            <option
                                value="{{ $product->id }}"
                                data-price="{{ $product->selling_price }}"
                                data-name="{{ $product->product_name }}">

                                {{ $product->product_name }}
                                (KSh {{ number_format($product->selling_price,2) }}/{{ $product->unit }})

                            </option>

                        @endforeach

                    </select>

                </div>

                <div class="mb-4">

                    <label class="font-semibold block mb-2">
                        Room
                    </label>

                    <input
                        type="text"
                        name="room"
                        class="w-full border rounded p-3"
                        required>

                </div>

                <div class="mb-4">

                    <label class="font-semibold block mb-2">
                        Opening Name
                    </label>

                    <input
                        type="text"
                        name="opening_name"
                        class="w-full border rounded p-3"
                        required>

                </div>

                <div class="grid grid-cols-2 gap-4">

                    <div>

                        <label class="font-semibold block mb-2">
                            Width (m)
                        </label>

                        <input
                            id="width"
                            type="number"
                            step="0.01"
                            name="width"
                            class="w-full border rounded p-3"
                            required>

                    </div>

                    <div>

                        <label class="font-semibold block mb-2">
                            Height (m)
                        </label>

                        <input
                            id="height"
                            type="number"
                            step="0.01"
                            name="height"
                            class="w-full border rounded p-3"
                            required>

                    </div>

                </div>

                <div class="mt-4">

                    <label class="font-semibold block mb-2">
                        Quantity
                    </label>

                    <input
                        id="quantity"
                        type="number"
                        value="1"
                        min="1"
                        name="quantity"
                        class="w-full border rounded p-3">

                </div>

                <div class="mt-4">

                    <label class="font-semibold block mb-2">
                        Notes
                    </label>

                    <textarea
                        name="notes"
                        rows="4"
                        class="w-full border rounded p-3"></textarea>

                </div>

                <button
                    class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded">

                    Save Measurement

                </button>

            </div>

            <!-- RIGHT SIDE -->

            <div class="bg-blue-50 rounded-lg shadow-lg p-6">

                <h2 class="text-2xl font-bold text-blue-700 mb-6">

                    Live Quote Preview

                </h2>

                <div class="space-y-4 text-lg">

                    <p>

                        <strong>Product:</strong>

                        <span id="previewProduct">

                            -

                        </span>

                    </p>

                    <p>

                        <strong>Area:</strong>

                        <span id="previewArea">

                            0.00

                        </span>

                        m²

                    </p>

                    <p>

                        <strong>Unit Price:</strong>

                        KSh

                        <span id="previewPrice">

                            0.00

                        </span>

                    </p>

                    <p>

                        <strong>Quantity:</strong>

                        <span id="previewQty">

                            1

                        </span>

                    </p>

                    <hr>

                    <p class="text-3xl font-bold text-green-700">

                        TOTAL

                    </p>

                    <p class="text-4xl font-bold text-green-700">

                        KSh

                        <span id="previewTotal">

                            0.00

                        </span>

                    </p>

                </div>

            </div>

        </div>

    </form>

</div>

<script>

const product=document.getElementById('product');
const width=document.getElementById('width');
const height=document.getElementById('height');
const quantity=document.getElementById('quantity');

function calculate(){

let selected=product.options[product.selectedIndex];

let price=parseFloat(selected.dataset.price)||0;

let name=selected.dataset.name||'-';

let w=parseFloat(width.value)||0;

let h=parseFloat(height.value)||0;

let q=parseInt(quantity.value)||1;

let area=w*h;

let total=area*price*q;

document.getElementById('previewProduct').innerText=name;

document.getElementById('previewArea').innerText=area.toFixed(2);

document.getElementById('previewPrice').innerText=price.toLocaleString();

document.getElementById('previewQty').innerText=q;

document.getElementById('previewTotal').innerText=total.toLocaleString();

}

product.addEventListener('change',calculate);

width.addEventListener('input',calculate);

height.addEventListener('input',calculate);

quantity.addEventListener('input',calculate);

</script>

@endsection