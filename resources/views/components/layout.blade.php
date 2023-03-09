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

        <script src="https://cdn.tailwindcss.com"></script>

        <script type="text/javascript" data-cfasync="false" async="true" src="https://web.chatfully.io/live/63cf9c3bLGGeppH5Ykog"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/nav.js') }}" defer></script>
        <script src="{{ asset('js/faq.js') }}" defer></script>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    </head>
    <body class="font-roboto antialiased">
            <x-navbar/>
            {{-- <div class="mt-32">
                <x-slider/>
            </div> --}}
            <div class="h-screen">
                <x-video/>
            </div>
            <main class="">
                {{$slot}}
            </main>
            <x-footer/>
            <div
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold  text-white h-40 mt-24 opacity-90 md:justify-center">
                <p class="ml-2"></p>
                <a href="https://wa.me/+233541497504" class="flex justify-center items-center absolute top-2 left-10" > 
                    <i class="fa-brands fa-whatsapp text-white text-8xl bg-green-400 flex justify-center items-center w-36  h-28 rounded"></i>
                </a>
            </div>  
    </body>
</html>
