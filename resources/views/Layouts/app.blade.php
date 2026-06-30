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
    <aside class="w-64 bg-blue-900 text-white">

        <div class="p-6 border-b border-blue-700">

            <h1 class="text-2xl font-bold">
                Modern Screens
            </h1>

            <p class="text-sm text-blue-200">
                Business Manager Pro
            </p>

        </div>

        <nav class="mt-6">

            <a href="/"
               class="block px-6 py-3 hover:bg-blue-800">
                🏠 Dashboard
            </a>

            <a href="/customers"
               class="block px-6 py-3 hover:bg-blue-800">
                👥 Customers
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-blue-800">
                📏 Measurements
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-blue-800">
                💰 Quotations
            </a>

            <a href="#"
               class="block px-6 py-3 hover:bg-blue-800">
                📦 Inventory
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

    </aside>

    <!-- Main Content -->
    <main class="flex-1">

        <!-- Top Bar -->
        <header class="bg-white shadow p-5 flex justify-between">

            <h2 class="text-2xl font-bold text-gray-700">
                Modern Screens Business Manager
            </h2>

            <div class="text-gray-600">
                Welcome, Kefa
            </div>

        </header>

        <!-- Page Content -->
        <section class="p-8">

            @yield('content')

        </section>

    </main>

</div>

</body>
</html>