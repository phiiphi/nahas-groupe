<x-guest>
    <h2 class="flex justify-center my-8 h-24 text-6xl font-sans">FEATURES</h2>
    <div class="block md:flex justify-center h-full md:h-[65rem] w-full">
        <div class="w-4/6 mx-4">
            <div class="flex justify-center flex-col text-gray-600 w-full" >
                <img class="object-cover w-full overflow-hidden h-[40rem]" 
                    src="{{$product->image_one ? asset('storage/uploads/'. $product->image_one) : asset('/images/no-image.png')}}" alt="" />

            </div>
            <div class="flex justify-center w-full my-8">
                <div class="flex justify-center flex-col text-gray-600 w-full md:w-1/2" >
                    <img class="object-cover w-full overflow-hidden h-44" 
                        src="{{$product->image_one ? asset('storage/uploads/'. $product->image_two) : asset('/images/no-image.png')}}" alt="" />

                </div>
                <div class="flex justify-center flex-col text-gray-600 w-full md:w-1/2 mx-4" >
                    <img class="object-cover w-full overflow-hidden h-44" 
                    src="{{$product->image_two ? asset('storage/uploads/'. $product->image_three) : asset('/images/no-image.png')}}" alt="" />

                </div>
                <div class="flex justify-center flex-col text-gray-600 w-full md:w-1/2" >
                    <img class="object-cover w-full overflow-hidden h-44" 
                        src="{{$product->image_one ? asset('storage/uploads/'. $product->image_four) : asset('/images/no-image.png')}}" alt="" />

                </div>
            </div>
        </div>
        <div class="w-2/6 mx-4">
            <div class="flex flex-col justify-center items-center shadow-md bg-white h-64">
                <p class="text-center text-6xl">{{$product->price}}</p>
                <p class="text-center text-2xl my-2">
                    <i class="fa-solid fa-location-dot mr-2"></i>{{$product->location}}
                </p> 
                <p class="text-center text-2xl my-2">
                    {{$product->description}}
                </p>
                <p class="text-center text-2xl my-2">
                    {{$product->status}}
                </p>
            </div>
            <div class="flex flex-col justify-center items-center shadow-md bg-white h-96 my-6">
                <p></p>
                <p class="p-4 text-2xl">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, culpa. Fugit asperiores laboriosam adipisci perspiciatis voluptas! Quam nostrum quod, aut fugiat assumenda ipsam provident cumque possimus repudiandae quibusdam quisquam illo!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ad, culpa. Fugit asperiores laboriosam adipisci perspiciatis voluptas! Quam nostrum quod, aut fugiat assumenda ipsam provident cumque possimus repudiandae quibusdam quisquam illo!
                </p>
                
            </div>

            <div class="flex flex-col justify-center items-center shadow-md bg-white h-40">
                <button class="h-20 w-96 border bg-laravel rounded text-xl">Contact Us</button> 
            </div>



        </div>
    </div>

    <div class="w-full md:mx-2 mt-14 md:w-1/3 shadow-lg max-h-72">
        <div class="relative overflow-hidden mt-4 max-w-full w-full h-72" style="padding-bottom: 56.25%">
            <iframe
            src="https://www.youtube.com/embed/{{$product->status}}"
                frameborder="0"
                allowfullscreen
                class="absolute top-0 left-0 w-full h-full"
            >
        </iframe>
        </div>
    </div>
    
    {{-- <div class="block md:flex justify-center h-full md:h-[40rem] w-full">
        <div class="flex justify-center w-full my-8">
            <div class="flex justify-center flex-col text-gray-600 w-full md:w-1/2 mx-4" >
                <img class="object-cover w-full overflow-hidden h-60 md:h-full" 
                    src="{{$product->image_one ? asset('storage/uploads/'. $product->image_one) : asset('/images/no-image.png')}}" alt="" />

            </div>
            <div class="flex justify-center flex-col text-gray-600 w-full md:w-1/2 mx-4" >
                <img class="object-cover w-full overflow-hidden h-60 md:h-full" 
                src="{{$product->image_two ? asset('storage/uploads/'. $product->image_two) : asset('/images/no-image.png')}}" alt="" />

            </div>
        </div>
    </div>
    <div class="block md:flex justify-center h-full md:h-[40rem] w-full">
        <div class="flex justify-center w-full my-8">
            <div class="flex justify-center flex-col text-gray-600 w-full md:w-1/2 mx-4" >
                <img class="object-cover w-full overflow-hidden h-60 md:h-full" 
                    src="{{$product->image_three ? asset('storage/uploads/'. $product->image_three) : asset('/images/no-image.png')}}" alt="" />

            </div>
            <div class="flex justify-center flex-col text-gray-600 w-full md:w-1/2 mx-4" >
                <img class="object-cover w-full overflow-hidden h-60 md:h-full" 
                    src="{{$product->image_four ? asset('storage/uploads/'. $product->image_four) : asset('/images/no-image.png')}}" alt="" />

            </div>
        </div>
    </div> --}}
</x-guest>