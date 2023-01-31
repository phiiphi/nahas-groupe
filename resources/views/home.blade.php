<x-layout>
    {{-- <div class="bg-gray-50">
        <x-feature/>
    </div> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <style>
        .page-item.active .page-link{
            z-index: 3;
            color: #fff !important  ;
            background-color: #00ACD6 !important;
            border-color: #00ACD6 !important;
            border-radius: 50%;
            padding: 6px 12px;
        }
        .page-link{
            z-index: 3;
            color: #00ACD6 !important;
            background-color: #fff;
            border-color: #007bff;
            border-radius: 50%;
            padding: 6px 12px !important;
        }
        .page-item:first-child .page-link{
            border-radius: 30% !important;
        }
        .page-item:last-child .page-link{
            border-radius: 30% !important;   
        }
        .pagination li{
            padding: 3px;
        }
        .disabled .page-link{
            color: #212529 !important;
            opacity: 0.5 !important;
        }
    </style>
    <h2 class="flex justify-center mt-16 h-24 text-4xl md:text-7xl font-serif">FEATURED PROPERTIES
    </h2>

    <div class="lg:grid lg:grid-cols-3 gap-4 space-x-0 space-y-4 md:space-y-0 md:mx-64">

        @unless(count($products) == 0)
    
        @foreach($products as $product)
        <x-listing-card :product="$product" />
        @endforeach
    
        @else
        <p>No product found</p>
        @endunless
    
    </div>  
    <div class="col-md-10 my-2">
        {{ $products->links('vendor.pagination.custom') }}
    </div>
    <div class="object-cover overflow-hidden bg-no-repeat w-full bg-white">
        <x-testimonial/> 
    </div>
    <x-services/>



</x-layout>