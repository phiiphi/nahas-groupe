<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <script src="{{ asset('js/sidebar.js') }}" defer></script>


  <script>
    tailwind.config = {
        theme: {
          extend: {
            colors: {
              laravel: '#ffbb38',
              background: '#f7f7f7',

            },
            fontFamily: {
                'roboto': '"Roboto"',
                'san': '"sans-serif"'


            },
            backgroundImage: {
            'back': "url('/images/bg-img/tracking.jpg')",
            'footer-texture': "url('/img/footer-texture.png')",
        }
          },
        },
      }
  </script>
  <title>Fast Logistics</title>
</head>

<body class="text-[#212121">

  <nav  class="flex fixed top-0 inset-x-0 z-10 justify-between border-b border  items-center bg-[#f2f4f6] text-white pl-16">
    <div class="flex items-center bg-[#f2f4f6] py-6">
        <a href="/"><img class="w-64 h-16" src="{{asset('images/core-img/logo.png')}}" alt="" class="logo" />
        </a>
    </div>
    <ul class=''>
        <div class="flex items-center h-24 text-lg text-black">    
            <li class=" hover:underline">
                <a href="/product/create" class="hover:text-laravel">Create Products</a>
            </li>
            <li class="mx-6 hover:underline">
              <a href="/product" class="hover:text-laravel">View Products</a>
          </li>
          <li class="mx-6 hover:underline">
            <a href="/logout" class="hover:text-laravel">Logout</a>
        </li>
        </div>
        
    </ul>

    
    
  </nav>

  <main class=" ">
    <div class="flex w-full">
        <div class="w-full bg-gray-100">
            {{$slot}}
        </div>

    </div>
  </main>
  {{-- <footer
    class="w-full flex items-center justify-start font-bold bg-[#021c3c] text-white h-96 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2022, All Rights reserved</p>
  </footer> --}}

  {{-- <x-flash-message /> --}}
</body>

</html>