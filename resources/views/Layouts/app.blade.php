<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Screens Business Manager</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-900 text-white flex flex-col">

        <div class="p-6 border-b border-blue-700">
            <h1 class="text-2xl font-bold">
                Modern Screens
            </h1>

            <p class="text-sm text-blue-200">
                Business Manager Pro
            </p>
        </div>

        <nav class="flex-1 mt-4">

            <a href="{{ route('dashboard') }}"
               class="block px-6 py-3 hover:bg-blue-800">
                🏠 Dashboard
            </a>

            <a href="{{ route('customers.index') }}"
               class="block px-6 py-3 hover:bg-blue-800">
                👥 Customers
            </a>

            <a href="{{ route('measurements.index') }}"
               class="block px-6 py-3 hover:bg-blue-800">
                📏 Measurements
            </a>

            <a href="{{ route('products.index') }}"
               class="block px-6 py-3 hover:bg-blue-800">
                📦 Products
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-blue-800">
                💰 Quotations
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-blue-800">
                👷 Installations
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-blue-800">
                📊 Reports
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-blue-800">
                ⚙ Settings
            </a>

        </nav>

        <div class="p-6 border-t border-blue-700">

            <p class="text-sm text-blue-200">
                Logged in as
            </p>

            <p class="font-semibold">
                Kefa
            </p>

            <p class="text-xs text-blue-300 mt-2">
                Version 1.0
            </p>

        </div>

    </aside>

    <!-- Main Content -->
    <main class="flex-1">

        <header class="bg-white shadow px-8 py-5">

            <h2 class="text-2xl font-bold text-gray-700">
                Modern Screens Business Manager
            </h2>

        </header>

        <section class="p-8">

            @yield('content')

        </section>

    </main>

</div>

</body>
</html>