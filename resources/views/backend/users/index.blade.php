<x-admin>
    <div class="container mx-auto px-4 sm:px-8 mt-24">
        <div class="py-8">
            <div>
              <h2 class="text-2xl font-semibold leading-tight">users</h2>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
              <div
                class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
              >
              @if (count($users) > 0)
                <table class="min-w-full leading-normal">
                  <thead>
                    <tr>
                        <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                      >
                        id
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                      >
                        Name
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                      >
                        Email
                      </th>
                      <th
                        class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                      >
                        Action
                      </th>
                     
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($users as $tracking)
                    <tr>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $tracking->id }}
                            
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $tracking->name }}
                            
                        </td>
                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $tracking->email }}
                            
                        </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="/users/{{$tracking->id}}">
                            <button class="text-green-500">
                            <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                            </button>
                        </a>
                        <form method="POST" action="/tracking/{{$tracking->id}}">
                          @csrf
                          @method('DELETE')
                          <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                        </form>
                       <!-- <button class="bg-red-300 h-8 w-20 mx-1 rounded">Delete</button> -->
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              @else
                <p class="text-danger text-center"> No Data Yet</p>
              @endif
              </div>
            </div>
          </div>
        </div>
    </div>
    
</x-admin>