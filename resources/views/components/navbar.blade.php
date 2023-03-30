<div class=" fixed top-0 inset-x-0 z-10">
    <div class="hidden md:flex justify-between w-full h-40 bg-[#002f54] hood ">
        <div class="flex justify-start items-center mx-6">
            <ul class="mx-4 pt-4 text-3xl md:flex md:justify-between md:pt-0 text-gray-200">
              <li class="flex justify-center items-center">
                <a class="md:p-4  py-2 block hover:text-purple-400 text-white">
                <img class="object-cover sm:w-64 md:w-full overflow-hidden sm:h-10 md:h-28" src="{{ asset('images/logg.jpeg') }}"
                alt="image" />
                  </a
                >
              </li>
              {{-- <li class="flex justify-center items-center">
                <a class="md:p-4  py-2 block hover:text-purple-400 text-white 
                   {{'/' == request()->path() ? 'underline underline-offset-8 decoration-white' : ''}}" 
                  href="{{route('home')}}"
                    >Home</a
                  >
                </li> --}}
                <li class="flex justify-center items-center">
                  <a class="md:p-4 py-2 block hover:text-purple-400 text-white  {{'about' == request()->path() ? 'underline underline-offset-8 decoration-white' : ''}}" 
                    href="{{route('about')}}" 
                    >About Us</a
                  >
                </li>
                <li class="flex justify-center items-center">
                  <a class="md:p-4 py-2 block hover:text-purple-400 text-white {{'services' == request()->path() ? 'underline underline-offset-8 decoration-white' : ''}}" 
                  href="{{route('services')}}"
                    >Services</a
                  >
                </li>
                <li class="flex justify-center items-center">
                  <a class="md:p-4 py-2 block  hover:text-purple-400 text-white {{'contact' == request()->path() ? 'underline underline-offset-8 decoration-white' : ''}}" 
                  href="{{route('contact')}}"
                    >Contact</a
                  >
                </li>
                <li class="flex justify-center items-center">
                  <a class="md:p-4 py-2 block  hover:text-purple-400 text-white {{'careers' == request()->path() ? 'underline underline-offset-8 decoration-white' : ''}}" 
                  href="{{route('careers')}}"
                    >Careers</a
                  >
                </li>
                <li class="flex justify-center items-center">
                  <a class="md:p-4 py-2 block hover:text-purple-400 text-white {{'faqs' == request()->path() ? 'underline underline-offset-8 decoration-white' : ''}}" 
                    href="{{route('faq')}}"
                      >FAQ's</a
                    >
                  </li>
            </ul>           
        </div>
        <div class="flex justify-end items-center mx-6">
          <ul class="mx-4 pt-4 text-3xl md:flex md:justify-between md:pt-0 text-white">
            <li class="flex justify-center items-center mx-4 md:mx-10  border hover:border hover:border-white sm:w-40 md:w-56">
              <a class="md:p-4 py-2 block text-white hover:text-purple-400" 
              href="{{route('gallery')}}"
              >Projects</a

              >
              <i class="fa-solid fa-diagram-project"></i>
            </li>
            <li class="flex justify-center items-center mx-0 md:mx-10  border hover:border hover:border-white w-56">
                <a class="md:p-4 py-2 block text-white hover:text-purple-400" 
                href="{{route('login')}}"
                  >Login
                  </a
                >
                <i class="fa-sharp fa-solid fa-right-to-bracket"></i>
              </li>
            </ul>           
        </div>
    </div>
    <div class="bg-white">
        <div class="flex md:hidden justify-between w-full h-40 hood text-black">
            <div class="flex justify-start items-center mx-6">
              <a href="{{route('home')}}"
              class="md:p-4  py-2 block hover:text-purple-400 text-white">
              <img class="object-fit w-24 overflow-hidden h-18 md:h-full" src="{{ asset('images/logg.jpeg') }}"
              alt="image" />
                </a
              >
            </div>
            <div class="flex justify-end items-center mx-6">
              <i class="mr-8 text-4xl fa-solid fa-bars h-6 w-6 cursor-pointer md:hidden block" id="menu-button"></i>
            </div>
        </div>
        <ul class="hidden text-right pr-8 bg-white  text-2xl md:justify-between md:pt-0 h-screen" id="menu">
          <div class="flex flex-col justify-center items-center border-gray-500 border-r-2 w-1/2">
            <li>
              <a class="md:p-4 py-2 block hover:text-purple-400" 
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
              href="{{route('services')}}"
                >Services</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block  hover:text-purple-400" 
              href="{{route('contact')}}"
                >Contact</a
              >
            </li>
            <li>
              <a class="md:p-4 py-2 block  hover:text-purple-400" 
              href="{{route('careers')}}"
                >Careers</a
              >
            </li>
            <li>
                <a class="md:p-4 py-2 block  hover:text-purple-400" 
                href="{{route('contact')}}"
                  >FAQ's</a
                >
              </li>
  
          </div>
        </ul> 
         
            
  
    </div>
</div>