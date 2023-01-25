<div class=" fixed top-0 inset-x-0 z-10">
    <div class="hidden md:flex justify-between w-full h-40 bg-white hood ">
        <div class="flex justify-start items-center mx-6">
            <ul class="mx-4 pt-4 text-3xl md:flex md:justify-between md:pt-0 text-black">
                <li>
                  <a class="md:p-4 py-2 block hover:text-purple-400 text-black
                   {{'/' == request()->path() ? 'underline underline-offset-8 decoration-black' : ''}}" 
                  href="{{route('home')}}"
                    >Home</a
                  >
                </li>
                <li>
                  <a class="md:p-4 py-2 block hover:text-purple-400 text-black {{'about' == request()->path() ? 'underline underline-offset-8 decoration-black' : ''}}" 
                    href="{{route('about')}}" 
                    >About Us</a
                  >
                </li>
                <li>
                  <a class="md:p-4 py-2 block hover:text-purple-400 text-black {{'services' == request()->path() ? 'underline underline-offset-8 decoration-black' : ''}}" 
                  href="{{route('services')}}"
                    >Services</a
                  >
                </li>
                <li>
                  <a class="md:p-4 py-2 block  hover:text-purple-400 text-black {{'contact' == request()->path() ? 'underline underline-offset-8 decoration-black' : ''}}" 
                  href="{{route('contact')}}"
                    >Contact</a
                  >
                </li>
                <li>
                  <a class="md:p-4 py-2 block  hover:text-purple-400 text-black {{'careers' == request()->path() ? 'underline underline-offset-8 decoration-black' : ''}}" 
                  href="{{route('careers')}}"
                    >Careers</a
                  >
                </li>
                <li>
                    <a class="md:p-4 py-2 block  hover:text-purple-400 text-black {{'faqs' == request()->path() ? 'underline underline-offset-8 decoration-black' : ''}}" 
                    href="{{route('faq')}}"
                      >FAQ's</a
                    >
                  </li>
            </ul>           
        </div>
        <div class="flex justify-end items-center mx-6">
          <ul class="mx-4 pt-4 text-3xl md:flex md:justify-between md:pt-0 text-black">
            <li class="flex justify-center items-center mx-10  border hover:border hover:border-black w-56">
              <a class="md:p-4 py-2 block text-black hover:text-purple-400" 
              href="{{route('gallery')}}"
              >Projects</a

              >
              <i class="fa-solid fa-diagram-project"></i>
            </li>
            <li class="flex justify-center items-center mx-10  border hover:border hover:border-black w-56">
                <a class="md:p-4 py-2 block text-black hover:text-purple-400" 
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
                <p>Logo</p>
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