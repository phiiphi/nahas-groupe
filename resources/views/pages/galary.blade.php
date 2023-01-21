<x-app>

    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4 ">

        @unless(count($product) == 0)
    
        @foreach($product as $product)
        <x-listing-card :product="$product" />
        @endforeach
    
        @else
        <p>No product found</p>
        @endunless
    
      </div>
    
      {{-- <div class="mt-6 p-4">
        {{$product->links()}}
      </div> --}}

</x-app>