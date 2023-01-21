<x-admin>
    <div class="max-w-6xl mx-auto mt-40">
        <div class="flex flex-col mt-5">
            <div class="flex flex-col">
                <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
                    @if ($errors->any())
                    <div class="block bg-red-700 p-5 mx-4 w-2/3 sm:w-1/2 px-10 md:w-1/3 mt-2">
                        <div class="flex">
                            <div class="">
                                <div class="text-sm">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li class="mx-4 text-sm text-white">{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
                    <form action="/users/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')  
                        <div class="flex">
                            <div class="w-full my-2 mx-2">
                                <label for="name"> Name *</label>
                                <input type="text" id="name" name="name" class="block w-full mt-1 border h-12 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('name', isset($tracking) ? $tracking->name : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-full my-2 mx-2">
                                <label for="password">Password *</label>
                                <input type="password" id="password" name="password" class="block w-full mt-1 border h-12 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('name', isset($tracking) ? $tracking->password : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-full my-2 mx-2">
                                <label for="password_confirmation">password_confirmation *</label>
                                <input type="text" id="password_confirmation" name="password_confirmation" class="block border h-12 w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('password_confirmation', isset($tracking) ? $tracking->password_confirmation : '') }}" required>
                            </div>
                        </div>
                        <div class="flex w-full mt-10 h-10">
                            <button type="submit" class="mx-10 bg-yellow-500 w-full py-2 text-sm font-semibold rounded-md shadow-md text-green-100  focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">Submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</x-admin>