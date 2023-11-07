<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,900,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .btn {
            background: #2563EB;
            display: inline-block;
            padding: 10px 20px;
            font-weight: 600;
            font-size: 15px;
            border-radius: 10px;
            color: #fff
        }
    </style>
    @yield('styles')
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')


        <header class="bg-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('home') }}">
                    <x-application-logo />
                </a>
                <nav class="space-x-4 flex gap-2 justify-end items-center">

                    @guest
                        {{-- register --}}
                        <a href="{{ route('register') }}"
                            class="text-blue-700 text-sm uppercase font-bold hover:text-yellow-400 transition">
                            Register
                        </a>
                        <a href="{{ route('login') }}"
                            class="py-2 px-5 bg-blue-600 text-white uppercase text-sm rounded-md font-bold">
                            Login
                        </a>


                    @endguest
                    @auth
                        <a href="{{ route('profile.edit') }}"
                            class="text-blue-700 text-sm uppercase font-bold hover:text-yellow-400 transition">My
                            account</a>

                        {{-- logout --}}
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button class="text-red-700 text-sm uppercase font-bold hover:text-yellow-400 transition">
                                <div class="flex items-center gap-2">
                                    Logout
                                    <iconify-icon icon="material-symbols:logout"></iconify-icon>
                                </div>
                            </button>
                        </form>
                        <a href="{{ route('dashboard') }}"
                            class="py-2 px-5 bg-blue-600 text-white uppercase text-sm rounded-md font-bold">
                            Dashboard
                        </a>
                    @endauth
                </nav>
            </div>
        </header>


        <!-- Page Content -->
        <main>
            @yield('content')
        </main>
    </div>

    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
</body>

</html>
