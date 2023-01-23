<x-layout>
    <h2 class="flex justify-center items-center text-9xl h-64 font-Arapey">CONTACT US</h2>

    <div class="font-Arapey sm:block md:flex justify-center items-center my-2">

        <div class="w-full md:w-1/2 ml-0 md:ml-2  border bg-[#003679]">
            <div class="py-10 max-w-xl md:max-w-2xl mx-auto my-6 ">
                <form method="POST" action="/send/enquiry">
                @csrf
                    <div class="flex my-2">
                        <div class="mr-2">
                            <label for="phone" class="inline-block text-2xl mb-1 text-white">Phone</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full h-12 py-8 text-2xl" name="phone" value="{{old('phone')}}" />
                            @error('phone')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="">
                            <label for="subject" class="inline-block text-2xl mb-1 text-white">Subject</label>
                            <input type="text" class="border border-gray-200 rounded h-12 py-8 px-12 w-full text-2xl" name="subject" value="{{old('subject')}}" />
            
                            @error('subject')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="mb-6 my-4">
                        <label for="email" class="inline-block mb-1 text-2xl text-white">Email</label>
                        <input type="email" class="border border-gray-200 rounded h-12 py-8 w-full text-2xl" name="email" value="{{old('email')}}" />
                
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                <div class="mb-4">
                    <label for="message" class="inline-block text-2xl mb-1 text-white">Message</label>
                    <textarea
                    class="
                        block
                        w-full
                        px-3
                        py-1.5
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-400 focus:outline-none
                        placeholder:text-2xl
                        text-2xl
                    "
                    id="exampleFormControlTextarea1"
                    rows="6"
                    name="message"
                    placeholder="Your message"
                    ></textarea>
                </div>
                <div class="flex justify-between mb-6">
                    <button type="submit" class="bg-yellow-500 h-12 w-40 text-white rounded px-4 hover:bg-black">
                    Sign In
                    </button>
                </div>
                <div class="flex justify-center items-center">
                    <p class="text-white md:text-gray-500 text-[0.5rem] md:text-[0.6rem]">THIS IS A SECURE FORM, INFORMATION SUBMITTED CANNOT BE VIEWED BY THIRD PARTY
                    </p>
                </div>
                </form>
                
            </div>
            <div class="flex justify-between w-full text-white md:text-gray-400">
                <p class="flex justify-start text-[0.4rem] md:text-xs mx-4 my-2">CARGO TRACKING PORTLA</p>
                <p class="flex justify-end text-[0.4rem] md:text-xs mx-4 my-2">Tabula Logistics LMS, Copyright &copy; 2022 All Rights reserved
                </p>

            </div>
        

        </div>
        <div class="block md:flex  flex-col justify-center w-full md:w-1/2">
            <h2 class="flex justify-center items-center text-4xl font-serif leading-6">Contact Details</h2>

            <a href="mailto:info@fastsecuritysystem.com?subject=enquiries" class="flex justify-center items-center italic hover:bg-white hover:cursor-pointer h-24">
                <div class="ml-2 text-2xl">
                    <p>info@fastsecuritysystem.com</p>
                </div>
            </a>
            <a href="tel:233209879957" class="flex justify-center items-center  hover:bg-white hover:cursor-pointer italic h-24">
                <div class="ml-2 text-2xl">
                    <p>+23305400000</p>
                </div>
            </a>
            <a href="tel:233209879957" class="flex justify-center items-center  hover:bg-white hover:cursor-pointer italic h-24">
                <div class="ml-2 text-2xl">
                    <p>1255 Coast Village Rd., #102b <br>
                        Santa Barbara, CA 93108</p>
                </div>
            </a>

        </div>
    </div>    
</x-layout>