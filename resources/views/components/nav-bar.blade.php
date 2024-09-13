<nav class="bg-white border-b shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
        <div class="flex">
          <a href="/" class="flex-shrink-0 flex items-center text-xl font-bold text-indigo-600">
            Dashboard
          </a>
        </div>
        <div class="flex items-center px-6 gap-6">

          @auth
            <a href="/logout" class="ml-4 text-red-600 hover:text-red-700">
              <form action="/logout" method="POST">
                @csrf
                @method('DELETE')

                <button>Logout</button>
              </form>            
            </a>

          

          @endauth

          @guest
          <a href="/register" class="text-gray-700 hover:text-indigo-600">Register</a>
          <a href="/login" class="text-gray-700 hover:text-indigo-600">Login</a>

          @endguest


        </div>
      </div>
    </div>
  </nav>