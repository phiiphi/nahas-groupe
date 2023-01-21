<header class="video-container">

    <!-- Video from coverr.co -->
    <video class="video-bg" autoplay muted loop>
        <source src="{{ asset('/video/nahas_properties.mp4') }}" type="video/mp4" />
        <source src="./nahasproperties.mp4" type="video/webm" />
    </video>
    <div class="video-overlay1 mt-24">
        <h1 class="text-8xl md:text-9xl font-sans font-bold text-white">We Build</h1>
        <h1 class="text-8xl md:text-9xl my-8 font-bold text-white">Your  Dreams</h1>
        <div class="flex flex-col justify-center items-center bg-white h-2 my-12 w-1/2 mx-2"> 
        </div>


        <div class="flex justify-center items-center mt-8">
          <div class="flex flex-col justify-center items-center bg-white h-40 w-1/2 mx-2">
            <i class="text-center text-4xl fa-sharp my-2 fa-solid fa-address-book"></i>       
            <p class="text-xl font-bold">Contact Us</p>   
          </div>
          <div class="flex flex-col justify-center items-center bg-white h-40 w-1/2 mx-2">
            <i class="text-center text-4xl fa-sharp fa-solid my-2 fa-bullseye"></i>       
            <p class="text-xl font-bold">Services</p>   
          </div>
          <div class="flex flex-col justify-center items-center bg-white h-40 w-1/2 mx-2">
            <i class="text-center text-4xl fa-sharp fa-solid my-2 fa-location-dot"></i>       
            <p class="text-xl font-bold">Location</p>   
          </div>
        </div>
        <div class="flex justify-center items-center mt-8">
          <div class="flex flex-col justify-center items-center bg-white h-40 w-1/2 mx-2">
            <i class="text-center text-4xl fa-sharp my-2 fa-solid fa-graduation-cap"></i>       
            <p class="text-xl font-bold">Careers</p>   
          </div>
          <div class="flex flex-col justify-center items-center bg-white h-40 w-1/2 mx-2">
            <i class="text-center text-4xl fa-sharp fa-solid my-2 fa-hashtag"></i>       
            <p class="text-xl font-bold">About Us</p>   
          </div>
          <div class="flex flex-col justify-center items-center bg-white h-40 w-1/2 mx-2">
            <i class="text-center text-4xl fa-sharp fa-solid my-2 fa-circle-question"></i>       
            <p class="text-xl font-bold">FAQ's</p>   
          </div>
        </div>
        
        <div class="flex justify-center items-center w-full mt-16">
          <div class="flex justify-center mt-8 items-center border h-16 w-16 rounded-full">
            <i class="flex justify-center items-center  fa-sharp fa-solid fa-arrow-down text-2xl text-white"></i>        
          </div>

        </div>
 
       
    </div>

    {{-- <div class="video-overlay">
        <div class="flex justify-between w-full h-40 hover:bg-white hood">
            <div class="flex justify-start items-center mx-6">
                <ul class="mx-4 pt-4 text-4xl md:flex md:justify-between md:pt-0">
                    <li>
                      <a class="md:p-4 py-2 block hover:text-purple-400 text-4xl" 
                      href="{{route('home')}}"
                        >Home</a
                      >
                    </li>
                    <li>
                      <a class="md:p-4 py-2 block hover:text-purple-400" 
                        href="{{route('about')}}" 
                        >About Us</a
                      >
                    </li>
                    <li>
                      <a class="md:p-4 py-2 block hover:text-purple-400" 
                      href="{{route('location')}}"
                        >Location</a
                      >
                    </li>
                    <li>
                      <a class="md:p-4 py-2 block  hover:text-purple-400" 
                      href="{{route('contact')}}"
                        >Contact</a
                      >
                    </li>
                  </ul>           
            </div>
            <div class="flex justify-end items-center mx-6">
              <ul class="mx-4 pt-4 text-4xl md:flex md:justify-between md:pt-0">
                <li>
                  <a class="md:p-4 py-2 block border hover:text-purple-400" 
                  href="{{route('tracking')}}"
                    >Tracking</a
                  >
                </li>  
                <li class="flex justify-center items-center mx-10  border hover:border hover:border-black w-56">
                    <a class="md:p-4 py-2 block hover:text-purple-400" 
                    href="{{route('login')}}"
                      >Login
                      </a
                    >
                    <i class="fa-sharp fa-solid fa-right-to-bracket"></i>
                  </li>
                </ul>           
          </div>
        

            </div>
         
            

    </div> --}}



</header>
