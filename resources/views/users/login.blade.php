<x-app>
  <x-card class="w-1/3 mx-auto my-52">
    <header class="text-center">
      <h2 class="text-3xl font-bold uppercase mb-1">Login</h2>
      <p class="mb-4 text-xl">Log into your account to post gigs</p>
    </header>

    <form method="POST" action="/users/authenticate">
      @csrf
      <div class="mb-6">
        <label for="email" class="inline-block text-xl mb-2">Email</label>
        <input type="email" class="border border-gray-200 rounded p-2 w-full h-12" name="email" value="{{old('email')}}" />

        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password" class="inline-block text-xl mb-2">
          Password
        </label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password"
          value="{{old('password')}}" />

        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button type="submit" class="bg-yellow-500 text-white rounded py-2 px-4 hover:bg-black">
          Sign In
        </button>
      </div>

      <div class="mt-8">
        <p>
          Don't have an account?
          <a href="/register" class="text-laravel">Register</a>
        </p>
      </div>
    </form>
  </x-card>
</x-app>