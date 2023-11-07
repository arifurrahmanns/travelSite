@extends('layouts.app')


@section('content')
    <div class="container py-20">
        <div class="max-w-4xl p-10 mx-auto rounded bg-white">
            <h4 class="font-bold uppercase text-gray-500 text-2xl">
                Order: #{{ $order->id }}
            </h4>
            <p class="font-medium mt-2">
                Name: {{ $order->user->name }}
            </p>
            <p class="font-medium ">
                Email: {{ $order->user->email }}
            </p>
            <p class="font-medium ">
                Phone: {{ $order->phone }}
            </p>

            {{-- table --}}
            <div class="mt-5">
                <table class="w-full table-auto">
                    <thead>
                        <tr class="bg-blue-500 text-white">
                            <th class="px-6 py-3 text-start">From</th>
                            <th class="px-6 py-3  text-start">To</th>
                            <th class="px-6 py-3  text-start">Date</th>
                            <th class="px-6 py-3 text-start">Person</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-700">
                        <tr class="bg-gray-100">
                            <td class="px-6 py-4">{{ $order->from }}</td>
                            <td class="px-6 py-4 ">{{ $order->to }}</td>
                            <td class="px-6 py-4 "> {{ date('d M Y  g:i:A', strtotime($order->date . $order->time)) }}</td>
                            <td class="px-6 py-4">{{ $order->number_of_person }}</td>

                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
