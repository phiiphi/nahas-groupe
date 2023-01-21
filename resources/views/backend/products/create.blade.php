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
                    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="price">Price*</label>
                                <input type="text" id="price" name="price"  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 h-12 border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('price') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="location">Location *</label>
                                <input type="text" id="location" name="location" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 h-12 border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('location') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="description">Description*</label>
                                <input type="text" id="description" name="description" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 h-12 border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('description') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="status">Status *</label>
                                <input type="text" id="status" name="status" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 h-12 border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('status') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label class="block text-sm font-bold text-gray-700" for="title">Image One</label>
                                <input type="file" name="image_one" placeholder="Choose image" id="image">
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label class="block text-sm font-bold text-gray-700" for="title">Image Two</label>
                                <input type="file" name="image_two" placeholder="Choose image" id="image">
                            </div>
                        </div>
                        <div class="flex mt-4">
                            <div class="w-1/2 my-2 mx-2">
                                <label class="block text-sm font-bold text-gray-700" for="title">Image Three</label>
                                <input type="file" name="image_three" placeholder="Choose image" id="image">
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label class="block text-sm font-bold text-gray-700" for="title">Image Four</label>
                                <input type="file" name="image_four" placeholder="Choose image" id="image">
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