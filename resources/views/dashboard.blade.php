@extends('layouts.app')


@section('content')
    <div class="container max-w-7xl">
        <h4 class="text-xl text-blue-700 mt-10 font-bold">
            My Flight Bookings
        </h4>
        <p class="mt-2 text-lg">
            Hi {{ auth()->user()->name }}, here are your flight bookings.
        </p>
        <div class="bg-white shadow-md rounded my-6 ">

            <table class="w-full table-auto">
                <thead>
                    <tr class="bg-blue-500 text-white">
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">From</th>
                        <th class="px-6 py-3">To</th>
                        <th class="px-6 py-3">Date</th>
                        <th class="px-6 py-3">Phone</th>
                        <th class="px-6 py-3">Persons</th>
                        <th class="px-6 py-3">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($orders as $order)
                        <tr class="bg-gray-100">
                            <td class="px-6 py-4">#{{ $order->id }}</td>
                            <td class="px-6 py-4">{{ $order->from }}</td>
                            <td class="px-6 py-4">{{ $order->to }}</td>
                            <td class="px-6 py-4"> {{ date('d M Y  g:i:A', strtotime($order->date . $order->time)) }}</td>
                            <td class="px-6 py-4">{{ $order->phone }}</td>
                            <td class="px-6 py-4">{{ $order->number_of_person }}</td>

                            <td class="px-6 py-4">
                                <a href="{{ route('order.view', ['id' => $order->id]) }}"
                                    class="flex items-center justify-center gap-2 bg-red-500 text-white py-1 px-4 rounded-full hover:bg-red-600 ">

                                    View <iconify-icon icon="solar:eye-broken"></iconify-icon>

                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
           
        </div>
        <div class="mt-10 text-center">
            <a href="{{ route('home') }}" class="btn">Order More</a>
        </div>
    </div>
@endsection
