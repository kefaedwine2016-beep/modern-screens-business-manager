<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Management - Modern Screens</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

<div class="max-w-7xl mx-auto p-8">

    <div class="bg-white rounded-lg shadow-lg p-6">

        <div class="flex justify-between items-center mb-6">

            <h1 class="text-3xl font-bold text-blue-700">
                Customer Management
            </h1>

            <a href="{{ route('customers.create') }}"
               class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded">
                + Add Customer
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
                    <th class="border p-3">Name</th>
                    <th class="border p-3">Phone</th>
                    <th class="border p-3">Email</th>
                    <th class="border p-3">Address</th>
                    <th class="border p-3">Location</th>
                    <th class="border p-3">Action</th>
                </tr>
            </thead>

            <tbody>

                @forelse($customers as $customer)

                    <tr>
                        <td class="border p-3">{{ $customer->customer_name }}</td>
                        <td class="border p-3">{{ $customer->phone }}</td>
                        <td class="border p-3">{{ $customer->email }}</td>
                        <td class="border p-3">{{ $customer->address }}</td>
                        <td class="border p-3">{{ $customer->location }}</td>
                        <td class="border p-3">
                            Edit | Delete
                        </td>
                    </tr>

                @empty

                    <tr>
                        <td colspan="6" class="border p-3 text-center text-gray-500">
                            No customers found.
                        </td>
                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

</body>
</html>