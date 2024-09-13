<x-layout>
    <x-page-heading>Create a Contact</x-page-heading>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
          <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
          <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create Contact</h2>
        </div>
      
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
          <form class="space-y-6" action="/contacts" method="POST">
            @csrf
            @method('POST')

            <div>
                <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
                <div class="mt-2">
                  <input name="name" type="text" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                </div>
              </div>

            <div>
              <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
              <div class="mt-2">
                <input name="email" type="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>
      
            <div>
                <label for="phone" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
              <div class="mt-2">
                <input name="phone" type="number" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
              </div>
            </div>

            <div>
                <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Gender</label>
                <div class="mt-2">
                  <div class="flex items-center">
                    <input name="gender" type="radio" value="male" required class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-600">
                    <label for="male" class="ml-3 block text-sm font-medium text-gray-700">Male</label>
                  </div>
                  <div class="flex items-center mt-2">
                    <input name="gender" type="radio" value="female" required class="h-4 w-4 text-indigo-600 border-gray-300 focus:ring-indigo-600">
                    <label for="female" class="ml-3 block text-sm font-medium text-gray-700">Female</label>
                  </div>
                </div>
              </div>    

              <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign Up</button>
            </div>
          </form>
      
          <p class="mt-10 text-center text-sm text-gray-500">
            go back to
            <a href="/" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500"> home page</a>
          </p>
        </div>
      </div>
      
    
    
    </x-layout>