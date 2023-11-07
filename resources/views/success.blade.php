@extends('layouts.app')


@section('content')
    <section class="py-20">
        <div class="container text-center">
            <h1 class="text-blue-700 font-bold text-3xl md:text-5xl capitalize mb-10">Thanks for your booking</h1>
            <a href="{{ route('dashboard') }}" class="btn uppercase">View your orders</a>
        </div>
    </section>
@endsection
