@extends('layouts.app')

@section('content')

<div class="max-w-7xl mx-auto">

    <div class="flex justify-between items-center mb-6">

        <div>

            <h1 class="text-3xl font-bold text-blue-700">
                Site Visits
            </h1>

            <p class="text-gray-500">
                Manage all customer site visits.
            </p>

        </div>

        <a
            href="{{ route('sitevisits.create') }}"
            class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">

            + New Site Visit

        </a>

    </div>

    @if(session('success'))

        <div class="bg-green-100 border border-green-300 text-green-800 p-4 rounded-lg mb-6">

            {{ session('success') }}

        </div>

    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden">

        <table class="min-w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="text-left p-4">Visit No.</th>

                    <th class="text-left p-4">Customer</th>

                    <th class="text-left p-4">Property</th>

                    <th class="text-left p-4">Visit Date</th>

                    <th class="text-left p-4">Technician</th>

                    <th class="text-left p-4">Status</th>

                    <th class="text-center p-4">Action</th>

                </tr>

            </thead>

            <tbody>

                @forelse($siteVisits as $visit)

                    <tr class="border-t hover:bg-gray-50">

                        <td class="p-4 font-semibold">

                            {{ $visit->visit_number }}

                        </td>

                        <td class="p-4">

                            {{ $visit->customer->customer_name }}

                        </td>

                        <td class="p-4">

                            {{ $visit->property_name }}

                        </td>

                        <td class="p-4">

                            {{ $visit->visit_date }}

                        </td>

                        <td class="p-4">

                            {{ $visit->technician }}

                        </td>

                        <td class="p-4">

                            @if($visit->status == 'Scheduled')

                                <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm">
                                    Scheduled
                                </span>

                            @elseif($visit->status == 'Measuring')

                                <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full text-sm">
                                    Measuring
                                </span>

                            @elseif($visit->status == 'Quoted')

                                <span class="bg-purple-100 text-purple-700 px-3 py-1 rounded-full text-sm">
                                    Quoted
                                </span>

                            @elseif($visit->status == 'Approved')

                                <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                    Approved
                                </span>

                            @else

                                <span class="bg-gray-100 text-gray-700 px-3 py-1 rounded-full text-sm">

                                    {{ $visit->status }}

                                </span>

                            @endif

                        </td>

                        <td class="p-4 text-center">

                            <a
                                href="#"
                                class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">

                                Open

                            </a>

                        </td>

                    </tr>

                @empty

                    <tr>

                        <td colspan="7" class="text-center p-10 text-gray-500">

                            No Site Visits Found

                        </td>

                    </tr>

                @endforelse

            </tbody>

        </table>

    </div>

</div>

@endsection