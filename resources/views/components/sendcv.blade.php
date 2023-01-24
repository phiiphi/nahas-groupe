<div class="">
    <h2 class="flex justify-center items-center font-serif text-6xl h-40">Send Us Your CV</h2>
    
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
    </div>
    <img src="uploads/{{ Session::get('file') }}">
    @endif
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">        @csrf
        <div class="flex w-full">
            <div class="mb-6 w-1/2">
                <label for="name" class="inline-block text-xl mb-2">Name</label>
                <input type="name" class="border border-gray-200 rounded p-2 w-full h-16" name="name" value="{{old('name')}}" required/>
        
                {{-- @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror --}}
            </div>
            <div class="mb-6 w-1/2 ml-4">
                <label for="email" class="inline-block text-xl mb-2">Email</label>
                <input type="email" class="border border-gray-200 rounded p-2 w-full h-16" name="email" value="{{old('email')}}" required/>
        
                {{-- @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror --}}
            </div>

        </div>
        <div class="flex w-full">
            <div class="mb-6 w-1/2">
                <label for="job_type" class="inline-block text-xl mb-2">Job Type</label>
                <select name="job_type" id="job_type" class="block h-16 w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('status') }}" required>
                    <option>Software Engineer</option>
                    <option>Electrical Engineer</option>
                    <option>Plumbing Engineer</option>
                    <option>Electrical Engineer</option>

                </select>        
                {{-- @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror --}}
            </div>
            <div class="mb-6 w-1/2 ml-4">
                <label for="phone" class="inline-block text-xl mb-2">Phone</label>
                <input type="phone" class="border border-gray-200 rounded p-2 w-full h-16" name="phone" value="{{old('phone')}}" required/>
        
                {{-- @error('email')
                <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                @enderror --}}
            </div>

        </div>
        <div class="w-full my-10">
            <textarea name="message" id="" class="border w-full" cols="30" rows="10">Message</textarea>
        </div>
        <div class="flex w-full border h-20">
            {{-- <input class="flex justify-center items-center w-1/2 h-20 text-lg text-center text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" id="file" type="file"> --}}

            <div class="flex justify-center items-center mx-8">
                <input type="file" class="" name="file" id="file">

            </div>
            {{-- <div class="flex justify-center items-center h-16  w-40 border-2 border-gray-400 bg-gray-200">Browse</div> --}}
        </div>
       
        <div class="flex justify-center items-center my-6">
          <button type="submit" class="bg-yellow-500 text-white h-16 w-1/2 rounded py-2 px-4 hover:bg-black">
            Submit
          </button>
        </div>
      </form>
</div>