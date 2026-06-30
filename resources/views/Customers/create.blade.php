<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Customer - Modern Screens</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="max-w-3xl mx-auto mt-10">

    <div class="bg-white shadow-lg rounded-lg p-8">

        <h1 class="text-3xl font-bold text-blue-700 mb-6">
            Add New Customer
        </h1>

        <form method="POST" action="{{ route('customers.store') }}">
            @csrf

            <div class="mb-4">
                <label class="block font-semibold mb-2">Customer Name</label>
                <input
                    type="text"
                    name="customer_name"
                    class="w-full border rounded p-3"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-2">Phone Number</label>
                <input
                    type="text"
                    name="phone"
                    class="w-full border rounded p-3"
                    required>
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-2">Email</label>
                <input
                    type="email"
                    name="email"
                    class="w-full border rounded p-3">
            </div>

            <div class="mb-4">
                <label class="block font-semibold mb-2">Address</label>
                <input
                    type="text"
                    name="address"
                    class="w-full border rounded p-3"
                    required>
            </div>

            <div class="mb-6">
                <label class="block font-semibold mb-2">Location</label>
                <input
                    type="text"
                    name="location"
                    class="w-full border rounded p-3">
            </div>

            <button
                type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded">
                Save Customer
            </button>

        </form>

    </div>

</div>

</body>
</html>