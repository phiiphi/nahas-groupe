<div class="hidden sm:block mx-2 md:mx-36 pt-2 font-roboto">
    <h3 class="flex text-3xl md:text-6xl font-bold justify-center items-center font-mono">Services</h3>
    <div class='block md:flex items-center my-4 py-2 border-b-2 border-gray-300 w-full'>
        <div class="block w-full md:flex items-center h-full md:h-10 text-lg mt-4 font-serif">    
            <button class="flex items-center justify-center sm:justify-start w-full md:w-44  h-10 text-laravel bg-white underline underline-offset-8 decoration-laravel" id="investment">    
                Land Acquision
            </button>
            <button class="flex items-center justify-center sm:justify-start w-full md:w-48 hover:underline hover:decoration-laravel hover:underline-offset-8" id="credit_card">
                Property Rentals
            </button>
            <button class="flex items-center justify-center sm:justify-start w-full md:w-64  hover:underline hover:decoration-laravel hover:underline-offset-8" id="payment">
                Property Management
            </button>
            <button class="flex items-center  justify-center sm:justify-start w-full md:w-40  hover:underline hover:decoration-laravel hover:underline-offset-8" id="card_benefits">
                Construction
            </button>
            <button class="flex items-center  justify-center sm:justify-start w-full md:w-64  hover:underline hover:decoration-laravel hover:underline-offset-8" id="wallet">
                Electrical Construction
            </button>
            <button class="flex items-center justify-center sm:justify-start w-full md:w-60  hover:underline hover:decoration-laravel hover:underline-offset-8" id="plumbing">
                Plumbing
            </button>
        </div>
    </div>
    <div class="">
        <div class="block md:flex h-full md:h-[40rem]" id="investment_block">
            <div class="flex justify-center flex-col text-gray-600 mr-0 md:mr-6 w-full md:w-1/2 h-96" >
                    <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/landacq.jpeg') }}"
                      alt="image" />
            </div>
            <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-96">
                <p class="text-3xl h-48 font-serif">
                    Nothing is<br>
                    impossible. We can <br>
                    help you acheive<br>
                    your goals            
                </p>            
                <p class="my-10 h-64">
                    Having the dream of owning a land? Choose a plot and build a unique home that suits your lifestyle and taste.  Own a land through our range of plot sizes are available on flexible payment methods.
                </p>
                <a href="#land-acquision">
                    <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
                </a>
            </div>
        </div>
        <div class="block md:flex h-full md:h-[40rem]" id="credit_block" style="display: none">
            <div class="flex justify-center flex-col text-gray-600 mr-0 md:mr-6 w-full md:w-1/2 h-96" >
                <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/rent_.jpeg') }}"
                  alt="image" />
            </div>
            <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-96">
                <p class="text-3xl h-48 font-serif">
                Rent A Place<br>
                From A Tap
                Of A <br>
                Button
            </p>            
            <p class="my-10 h-64">
                If you are looking for the right rental property for your Business or Personal use. Let the agents at Island Living Real Estate assist you. We have listings for residential homes and condos and commercial shopping centers or office spaces. Our team can help you find the right location to ensure a good turnover for your business venture or a comfortable development or neighborhood for to reside.
            </p>
    
            <a href="#rentals">
                <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
            </a>    
            </div>
        </div>
        <div class="h-[40rem]" id="payment_block" style="display: none">
            <div class="flex justify-center flex-col text-gray-600 mr-0 md:mr-6 w-full md:w-1/2 h-96" >
                <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/property_management.png') }}"
                  alt="image" />
            </div>
            <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-96">
                <p class="text-3xl h-48 font-serif">
                    Let Do The Heavy Lifting  <br>
                    For You .<br> Bring Your Properties Us,<br>
                    Lets Connect You To The Best.
                    
                </p>            
                <p class="my-10 h-64">
                    From Estate Management Services to Hands-on Property Management, we handle it for you. We offer a complete management service including maintenance and repairs, monthly rent collections, lease negotiations, budget projections, quarterly reports, and annual preventive maintenance analysis
                </p>
                <a href="#property-management">
                    <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
                </a>         
            </div>
        </div>
        <div class="h-[40rem]" id="card_block" style="display: none">
            <div class="flex justify-center flex-col text-gray-600 mr-6 w-1/2 h-96" >
                <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/construction.jpeg') }}"
                  alt="image" />
            </div>
            <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-96">
                <p class="text-3xl h-48 font-serif">
                    Dream it? Bring It<br>
                    Us To Us And Let's <br>
                    Build It.<br>
                </p>            
                <p class="my-10 h-64">
                    We have well trained and experience engieneer that can build your dream houses in a top notch style. We offer our client peace of mind and the hustle by building for you at the lowest prices.
                </p>
                <a href="#construction__">
                    <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
                </a>          
            </div>
        </div>
        <div class="h-[40rem]" id="wallet_block" style="display: none">
            <div class="flex justify-center flex-col text-gray-600 mr-6 w-1/2 h-96" >
                <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/electric.jpeg') }}"
                  alt="image" />
            </div>
            <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-96">
                <p class="text-3xl h-48 font-serif">
                    Let Do The Heavy Lifting  <br>
                    For You .<br> Bring Your Properties Us,<br>
                    Lets Connect You To The Best.
                    
                </p>            
                <p class="my-10 h-64">
                    From Estate Management Services to Hands-on Property Management, we handle it for you. We offer a complete management service including maintenance and repairs, monthly rent collections, lease negotiations, budget projections, quarterly reports, and annual preventive maintenance analysis
                </p>
                <a href="#electrical__">
                    <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
                </a>          
            </div>
        </div>
        <div class="h-[40rem]" id="plumbing_block" style="display: none">
            <div class="flex justify-center flex-col text-gray-600 mr-6 w-1/2 h-96" >
                <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/plumbing.jpeg') }}"
                  alt="image" />
            </div>
            <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-96">
                <p class="text-3xl h-48 font-serif">
                    Furnishing your <br> Home <br> With The Best 
                </p>            
                <p class="my-10 h-64">
                    Looking to furnishing your home with the best? look no further, we have best plumbers 
                    across the world for all various of plumbings jobs from indutrial, commercial, maintenance
                    and domestics services.

                    
                </p>
                <a href="#plumbing__">
                    <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
                </a>              
            </div>
        </div>
    </div>
   
</div> 
<div class="block md:hidden mx-2 md:mx-36        font-roboto">
    <h3 class="flex text-3xl md:text-8xl font-bold justify-center items-center font-mono">Services</h3>
    <div class='block md:flex items-center py-2 border-b-2 border-gray-300 w-full'>
        <div class="block w-full md:flex items-center h-full md:h-10 text-xl mt-4 font-serif">    
            <button class="flex items-center justify-center sm:justify-start w-full md:w-72  h-10 text-laravel my-4  bg-white underline underline-offset-8 decoration-laravel" id="mobile_investment">    
                Land Acquision
            </button>
            <button class="flex items-center justify-center sm:justify-start w-full md:w-72 md:ml-6 hover:underline hover:decoration-laravel hover:underline-offset-8" id="mobile_credit_card">
                Property Rentals
            </button>
            <button class="flex items-center justify-center sm:justify-start w-full md:w-60  hover:underline hover:decoration-laravel my-2 hover:underline-offset-8" id="mobile_payment">
                Property Management
            </button>
            <button class="flex items-center justify-center sm:justify-start w-full md:w-60  hover:underline hover:decoration-laravel hover:underline-offset-8" id="mobile_card_benefits">
                Construction
            </button>
            <button class="flex items-center justify-center my-4 sm:justify-start w-full md:w-60  hover:underline hover:decoration-laravel hover:underline-offset-8" id="mobile_wallet">
                Electrical Construction
            </button>
            <button class="flex items-center justify-center sm:justify-start w-full md:w-60  hover:underline hover:decoration-laravel hover:underline-offset-8" id="mobile_plumbing">
                Plumbing
            </button>
        </div>
    </div>
    <div class="block md:flex h-full md:h-[40rem] my-4 md:my-0" id="mobile_investment_block">
        <div class="flex justify-center flex-col text-gray-600 mr-0 md:mr-6 w-full md:w-1/2 h-full md:h-[38rem]" >
                <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/landacq.jpeg') }}"
                  alt="image" />
        </div>
        <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-96">
            <p class="text-3xl font-serif">
                Nothing is
                impossible. We can
                help you acheive<br>
                your goals            
            </p>            
            <p class="my-2">
                Having the dream of owning a land? Choose a plot and build a unique home that suits your lifestyle and taste.  Own a land through our range of plot sizes are available on flexible payment methods.
            </p>
            <a href="#land-acquision">
                <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
            </a>
        </div>
    </div>
    <div class="block md:flex h-full md:h-[40rem]" id="mobile_credit_block" style="display: none">
        <div class="flex justify-center flex-col text-gray-600 mr-0 md:mr-6 w-full md:w-1/2 h-96" >
            <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/rent_.jpeg') }}"
              alt="image" />
        </div>
        <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-full md:h-96">
            <p class="text-3xl font-serif">
                Rent A Place
                From A Tap
                Of A
                Button
            </p>            
            <p class="my-4">
                If you are looking for the right rental property for your Business or Personal use. Let the agents at Island Living Real Estate assist you. We have listings for residential homes and condos and commercial shopping centers or office spaces. Our team can help you find the right location to ensure a good turnover for your business venture or a comfortable development or neighborhood for to reside.
            </p>

            <a href="#rentals">
                <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
            </a>  
        </div>
    </div>
    <div class="block md:flex h-full md:h-[40rem]" id="mobile_payment_block" style="display: none">
        <div class="flex justify-center flex-col text-gray-600 mr-0 md:mr-6 w-full md:w-1/2 h-96" >
            <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/property_management.png') }}"
              alt="image" />
        </div>
        <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-96">
            <p class="text-3xl font-serif">
                Let Do The Heavy Lifting 
                For You . Bring Your Properties Us,
                Lets Connect You To The Best.
                
            </p>            
            <p class="my-4">
                From Estate Management Services to Hands-on Property Management, we handle it for you. We offer a complete management service including maintenance and repairs, monthly rent collections, lease negotiations, budget projections, quarterly reports, and annual preventive maintenance analysis
            </p>
            <a href="#property-management">
                <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
            </a>      
        </div>
    </div>
    <div class="block md:flex h-full md:h-[40rem]" id="mobile_card_block" style="display: none">
        <div class="flex justify-center flex-col text-gray-600 mr-0 md:mr-6 w-full md:w-1/2 h-96" >
            <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/construction.jpeg') }}"
              alt="image" />
        </div>
        <div class="flex justify-center flex-col  text-black w-full md:w-1/2 h-96">
            <p class="text-3xl font-serif">
                Dream it? Bring It<br>
                Us To Us And Let's <br>
                Build It.<br>
            </p>            
            <p class="my-4">
                We have well trained and experience engieneer that can build your dream houses in a top notch style. We offer our client peace of mind and the hustle by building for you at the lowest prices.
            </p>
            <a href="#construction__">
                <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
            </a>     
        </div>
    </div>
    <div class="block md:flex h-full md:h-[40rem]" id="mobile_wallet_block" style="display: none">
        <div class="flex justify-center flex-col text-gray-600 mr-0 md:mr-6 w-full md:w-1/2 h-96" >
            <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/electric.jpeg') }}"
              alt="image" />
        </div>
        <div class="flex justify-center flex-col  text-black mx-0 md:mx-6 w-full md:w-1/2 h-96">
            <p class="text-3xl font-serif">
                Let Do The Heavy Lifting  <br>
                For You .<br> Bring Your Properties Us,<br>
                Lets Connect You To The Best.
                
            </p>            
            <p class="my-4">
                From Estate Management Services to Hands-on Property Management, we handle it for you. We offer a complete management service including maintenance and repairs, monthly rent collections, lease negotiations, budget projections, quarterly reports, and annual preventive maintenance analysis
            </p>
            <a href="#electrical__">
                <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
            </a>          
        </div>
    </div>
    <div class="block md:flex h-full md:h-[40rem]" id="mobile_plumbing_block" style="display: none">
        <div class="flex justify-center flex-col text-gray-600 mr-0 md:mr-6 w-full md:w-1/2 h-96" >
            <img class="object-cover w-full overflow-hidden h-96 md:h-full" src="{{ asset('images/plumbing.jpeg') }}"
              alt="image" />
        </div>
        <div class="flex justify-center flex-col  text-black mx-0 md:mx-6 w-full md:w-1/2 h-96">
            <p class="text-3xl h-48 font-serif">
                Furnishing your <br> Home <br> With The Best 
            </p>            
            <p class="my-10 h-64">
                Looking to furnishing your home with the best? look no further, we have best plumbers 
                across the world for all various of plumbings jobs from indutrial, commercial, maintenance
                and domestics services.        
            </p>
            <a href="#plumbing__">
                <button class="h-12 bg-gray-900 w-52 text-white text-xl font-roboto hover:cursor-pointer">Read Now </button>
            </a>           
        </div>
    </div>
</div> 

