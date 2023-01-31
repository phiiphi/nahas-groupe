@props(['product'])
<x-card class="h-full md:h-[50rem]">
<div class="block md:flex justify-center h-full md:h-[50rem] mx-2">
  <div class="flex justify-center">
      <div class="flex justify-center flex-col text-gray-600 w-full md:w-full " >
          <img class="object-cover w-full overflow-hidden h-80 md:h-full" 
            src="{{$product->image_one ? asset('storage/uploads/'. $product->image_one) : asset('/images/no-image.png')}}" alt="" />
          <div class="">
              <p class="text-center text-2xl my-2">
                  {{$product->price}}
              </p>
              <p class="text-center text-2xl my-2">
                  <i class="fa-solid fa-location-dot mr-2"></i>{{$product->location}}
              </p>
              <p class="text-center text-2xl my-2">
                  {{$product->description}}
              </p>
              <p class="text-center text-2xl my-2">
                  {{$product->status}} 
              </p>
              <div class="flex justify-center items-center text-center text-2xl mb-8">
                <div class="flex justify-center items-center text-center w-1/3 h-12 border text-2xl">
                    <a href="/product/{{$product->id}}">Read More</a>
                </div>
              </div>

          </div>

      </div>
  </div>
</div>
</x-card>