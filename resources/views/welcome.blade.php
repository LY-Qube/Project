<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>{{ config('app.name', 'Project') }}</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <style>
        header {
            background: url('https://images.pexels.com/photos/57690/pexels-photo-57690.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        }
    </style>
</head>

<body class="antialiased">

<main>

    <nav id="nav" class="fixed inset-x-0 top-0 flex flex-row justify-between z-10 text-white bg-transparent">

        <div class="p-4">
            <div class="font-extrabold tracking-widest text-xl">
                <a href="#" class="transition duration-500 hover:text-indigo-500">TheCube</a>
            </div>
        </div>

    </nav>

    <header id="up" class="bg-center bg-fixed bg-no-repeat bg-center bg-cover h-screen relative">
        <!-- Overlay Background + Center Control -->
        <div class="h-screen bg-opacity-50 bg-black flex items-center justify-center" style="background:rgba(0,0,0,0.5);">
            <div class="mx-2 text-center">
                <h1 class="text-gray-100 font-extrabold text-4xl xs:text-5xl md:text-6xl">
                    <span class="text-white">Right</span> Place To
                </h1>
                <h2 class="text-gray-200 font-extrabold text-3xl xs:text-4xl md:text-5xl leading-tight">
                    Get a <span class="text-white">Better</span> and <span class="text-white">Professionals</span>
                    System
                </h2>
                <div class="inline-flex">
                    <a href="{{ route('login') }}"
                        class="p-2 my-5 mx-2 bg-indigo-700 hover:bg-indigo-800 font-bold text-white
                        rounded border-2 border-transparent hover:border-indigo-800 shadow-md transition
                        duration-500 md:text-xl">
                        Login
                    </a>
                        <a href="{{ route('register') }}"
                            class="p-2 my-5 mx-2 bg-transparent border-2 bg-indigo-200 bg-opacity-75
                            hover:bg-opacity-100 border-indigo-700 rounded hover:border-indigo-800 font-bold
                            text-indigo-800 shadow-md transition duration-500 md:text-lg">
                            Register
                        </a>
                </div>
            </div>
        </div>
    </header>

</main>

</body>
</html>
