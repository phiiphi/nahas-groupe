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
                    <form action="/tracking/update/{{$tracking->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')  
                        <div class="flex">
                            <div class="w-full my-2 mx-2">
                                <label for="name">Consession Name *</label>
                                <input type="text" id="name" name="name" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('name', isset($tracking) ? $tracking->name : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="tracking_number">Tracking Number *</label>
                                <input type="text" id="tracking_number" name="tracking_number" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->tracking_number : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="origin">Origin *</label>
                                <input type="text" id="origin" name="origin" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->origin : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="tracking_number">Destination *</label>
                                <input type="text" id="destination" name="destination" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->destination : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="sender">Sender *</label>
                                <input type="text" id="sender" name="sender" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('sender', isset($tracking) ? $tracking->sender : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="receiver">Receiver *</label>
                                <input type="text" id="receiver" name="receiver" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 h-12 border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('receiver', isset($tracking) ? $tracking->receiver : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="status">Status *</label>
                                <select name="status" id="status" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 h-12 border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('status', isset($tracking) ? $tracking->status : '') }}" required>
                                    <option>PENDING</option>
                                    <option>IN TRANSIT</option>
                                    <option>ON HOLD</option>
                                    <option>PROCESSING</option>
                                    <option>SHIPPED</option>
                                    <option>PICK UP</option>

                                </select>
                                {{-- <input type="text" id="status" name="status" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 h-12 border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('status')}}" required> --}}
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="description">Description *</label>
                                <input type="text" id="description" name="description" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->description : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="tracking_number">Current Location *</label>
                                <input type="text" id="current_location" name="current_location" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->current_location : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="scheduled_departure_date">scheduled_departure_date *</label>
                                <input type="text" id="scheduled_departure_date" name="scheduled_departure_date" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->scheduled_departure_date : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="actual_departure_date">actual_departure_date *</label>
                                <input type="text" id="actual_departure_date" name="actual_departure_date" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->actual_departure_date : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="scheduled_arrival_date">scheduled_arrival_date *</label>
                                <input type="text" id="scheduled_arrival_date" name="scheduled_arrival_date" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->scheduled_arrival_date : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="actual_arrival_date">actual_arrival_date *</label>
                                <input type="text" id="actual_arrival_date" name="actual_arival_date" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->actual_arival_date : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="gross_weight">gross_weight *</label>
                                <input type="text" id="gross_weight" name="gross_weight" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->gross_weight : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="net_weight">net_weight *</label>
                                <input type="text" id="net_weight" name="net_weight" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->net_weight : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="sender_address">sender_address *</label>
                                <input type="text" id="sender_address" name="sender_address" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->sender_address : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="receiver_address">receiver_address *</label>
                                <input type="text" id="receiver_address" name="receiver_address" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->receiver_address : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="sender_email">sender_email *</label>
                                <input type="text" id="sender_email" name="sender_email" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->sender_email : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="sender_phone">sender_phone *</label>
                                <input type="text" id="sender_phone" name="sender_phone" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->sender_phone : '') }}" required>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="w-1/2 my-2 mx-2">
                                <label for="receiver_email">sender_address *</label>
                                <input type="text" id="receiver_email" name="receiver_email" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->receiver_email : '') }}" required>
                            </div>
                            <div class="w-1/2 my-2 mx-2">
                                <label for="receiver_phone">receiver_address *</label>
                                <input type="text" id="receiver_phone" name="receiver_phone" class="block w-full mt-1 border rounded-md h-12  shadow-sm placeholder:text-gray-400 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('tracking_number', isset($tracking) ? $tracking->receiver_phone : '') }}" required>
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