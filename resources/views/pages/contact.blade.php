<x-app>
    <h2 class="flex justify-center items-center text-3xl md:text-6xl h-16 md:h-20 font-bold">CONTACT US</h2>
        <a href="mailto:info@gnahas.com?subject=enquiries" class="flex justify-center items-center italic hover:bg-white hover:cursor-pointer">
            <div class="ml-2 text-2xl flex justify-center items-center text-center">
                <i class="fa-solid fa-envelope mx-2"></i>
                <p>info@gnahas.com</p>
            </div>
        </a>
        <a href="tel:2332000000" class="flex justify-center items-center my-6  hover:bg-white hover:cursor-pointer italic">
            <div class="ml-2 text-2xl flex justify-center items-center text-center">
                <i class="fa-solid fa-phone mx-2"></i>
                <p>+233598492444</p>
            </div>
        </a>
    <div class="font-Arapey sm:block md:flex justify-center items-center my-2">
        <div class="w-full md:w-1/2 ml-0 md:ml-2  border bg-[#003679]">
            <div class="py-10 max-w-sm md:max-w-lg mx-auto my-6">
                <form method="POST" action="/send/enquiry">
                @csrf
                    <div class="flex my-2">
                        <div class="mr-2">
                            <label for="phone" class="inline-block text-sm mb-1 text-white">Phone</label>
                            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="phone" value="{{old('phone')}}" />
            
                            @error('phone')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>
                        
                        <div class="">
                            <label for="subject" class="inline-block text-sm mb-1 text-white">Subject</label>
                            <input type="text" class="border border-gray-200 rounded py-2 px-5 w-full" name="subject" value="{{old('subject')}}" />
            
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                    </div>
                    <div class="mb-6">
                        <label for="email" class="inline-block mb-1 text-sm text-white">Email</label>
                        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{old('email')}}" />
                
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                        @enderror
                    </div>
                <div class="mb-4">
                    <label for="message" class="inline-block text-sm mb-1 text-white">Message</label>
                    <textarea
                    class="
                        block
                        w-full
                        px-3
                        py-1.5
                        text-base
                        font-normal
                        text-gray-700
                        bg-white bg-clip-padding
                        border border-solid border-gray-300
                        rounded
                        transition
                        ease-in-out
                        m-0
                        focus:text-gray-700 focus:bg-white focus:border-blue-400 focus:outline-none
                    "
                    id="exampleFormControlTextarea1"
                    rows="6"
                    name="message"
                    placeholder="Your message"
                    ></textarea>
                </div>
                <div class="flex justify-between mb-6">
                    <button type="submit" class="bg-[#ffbb38] h-10 w-40 text-white rounded px-4 hover:bg-black">
                    Send
                    </button>
                </div>
            </form>
                
            </div>
        </div>
        <div class="block md:flex  flex-col justify-center w-full md:w-1/2 ml-4">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.629474016642!2d-0.27991748505533676!3d5.621597095924713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9b3f83fc2165%3A0x891c00f9b9b53821!2sNahas%20Properties!5e0!3m2!1sen!2sgh!4v1679130105216!5m2!1sen!2sgh" width="700" height="565" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
           

        </div>
    </div> 
</x-app>