<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">


        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
        <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
        <title>{{ config('app.name', 'Royal Bullion Security Vaults') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">



        <meta property="og:image" content="https://rbsvaults.com/images/logogold.jpg" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="https://rbsvaults.com/"/>
        <meta property="og:title" content="Royal Bullion Security Vault" />
        <meta property="og:description" content="We're the official home of the royal vaults, Get the..."/> 

        <!-- swiper -->
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/slider.css') }}">
        <link rel="stylesheet" href="{{ asset('css/whatsapp.css') }}">
        <link rel="stylesheet" href="{{ asset('css/video.css') }}">

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/nav.js') }}" defer></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-roboto antialiased">
        <div class="">
            <header class="mb-40">
                <x-navbar/>
            </header>            
            <main class="bg-gray-100">
                {{$slot}}
            </main>
            {{-- <x-footer/> --}}
        </div>        
    </body>
</html>
