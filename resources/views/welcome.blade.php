@extends('layouts.app')

@section('styles')
    <style>
        #hero {
            background: linear-gradient(#ffffff, #ffffff4b), url('{{ asset('/img/travel-concept-with-landmarks (1).jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: calc(100vh - 103px);
        }

        .bookingForm {
            background: #fff;
            padding: 15px;
            border-radius: 10px
        }

        .bookingForm input {
            background: #fff;
            border: 1px solid #ddd !important;
            display: block;
            width: 100%;
            border-radius: 10px
        }

        #hero h2 {
            text-align: center;
            font-size: 50px;
            font-weight: 900;
            text-transform: uppercase;
        }

        #hero p {
            text-align: center;
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 50px;
        }
    </style>
@endsection
@section('content')
    <section id="hero" class="py-10 flex items-center lg:py-28">
        <div class="container -mt-10">
            <h2 class="text-blue-700">
                Find your next destination
            </h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptates. Quisquam, voluptates.
            </p>
            <form method="POST" action="{{ route('order.add') }}" class="bookingForm max-w-xl mx-auto">
                @csrf
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="col-span-2 md:col-span-1">
                        <label for="">From</label>
                        <input type="text" name="from" required placeholder="From">
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label for="">Destination</label>
                        <input type="text" name="to" required placeholder="To">
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label for="">Date</label>
                        <input type="date" name="date" required placeholder="Date">
                    </div>
                    <div class="col-span-2 md:col-span-1">
                        <label for="">Time</label>
                        <input type="time" name="time" required placeholder="Date">
                    </div>
                    <div class="col-span-2 md:col-span-2">
                        <label for="">Number of Person</label>
                        <input type="number" name="number_of_person" value="1" min="1" required
                            placeholder="Number of person">
                    </div>
                    <div class="col-span-1">
                        <label for="">Phone</label>
                        <input type="tel" name="phone" min="1" required placeholder="number of person">
                    </div>
                    <div class="col-span-1">
                        <label for="">Email</label>
                        <input type="email" name="email"  @auth readonly  value="{{ Auth::user()->email }}" @endauth min="1"
                            required placeholder="number of person">
                    </div>
                    <div class="lg:col-span-2">
                        <button class="btn w-full uppercase">
                            Confirm Flight
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
